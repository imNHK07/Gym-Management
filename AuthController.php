<?php
session_start();
include_once "../model/myDB.php";

class AuthController {
    private $model;
    private $conn;

    public function __construct() {
        $this->model = new Model();
        $this->conn = $this->model->OpenConn();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $admin = $this->model->GetAdminByEmail($this->conn, 'admin', $email);

            if ($admin && password_verify($password, $admin['password'])) {
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['admin_name'] = $admin['fname'] . " " . $admin['lname'];
                header("Location: ../view/dashboard.php");
                exit();
            } else {
                $error = "Invalid email or password";
                include "../view/login.php";
            }
        } else {
            include "../view/login.php";
        }
    }

    public function logout() {
        session_destroy();
        header("Location: ../view/login.php");
        exit();
    }
}
