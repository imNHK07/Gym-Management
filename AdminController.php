<?php
session_start();
include_once "../model/myDB.php";

class AdminController {
    private $model;
    private $conn;

    public function __construct() {
        $this->model = new Model();
        $this->conn = $this->model->OpenConn();
        $this->checkAuth();
    }

    private function checkAuth() {
        if (!isset($_SESSION['admin_id'])) {
            header("Location: ../view/login.php");
            exit();
        }
    }

    public function list() {
        $admins = $this->model->GetAdmins($this->conn, 'admin');
        include "../view/dashboard.php";
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            if ($this->model->InsertAdmin($this->conn, 'admin', $data)) {
                header("Location: ../controller/AdminController.php?action=list");
            } else {
                $error = "Error inserting admin";
                include "../view/admin_form.php";
            }
        } else {
            include "../view/admin_form.php";
        }
    }

    public function edit() {
        if (!isset($_GET['id'])) {
            header("Location: ../controller/AdminController.php?action=list");
            exit();
        }
        $id = $_GET['id'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            if ($this->model->UpdateAdmin($this->conn, 'admin', $id, $data)) {
                header("Location: ../controller/AdminController.php?action=list");
            } else {
                $error = "Error updating admin";
                $admin = $data;
                include "../view/admin_form.php";
            }
        } else {
            $admin = $this->model->GetAdminById($this->conn, 'admin', $id);
            include "../view/admin_form.php";
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->model->DeleteAdmin($this->conn, 'admin', $id);
        }
        header("Location: ../controller/AdminController.php?action=list");
    }
}
