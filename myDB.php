<?php
class Model {
    private $conn;

    public function OpenConn() {
        $this->conn = new mysqli("localhost", "root", "", "mydb");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }

    public function createAdmin($data) {
        $sql = "INSERT INTO admin (fname, lname, email, phone, gender, address, district, country, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        if (!$stmt) {
            die("Prepare failed: " . $this->conn->error);
        }
        $password = $data['password']; // Plain password (for learning only)
        $stmt->bind_param("sssssssss", 
            $data['fname'], $data['lname'], $data['email'], $data['phone'], $data['gender'], 
            $data['address'], $data['district'], $data['country'], $password
        );
        return $stmt->execute();
    }

    // Read all admins
    public function getAllAdmins() {
        $result = $this->conn->query("SELECT * FROM admin");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Read one admin by id
    public function getAdminById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM admin WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Update admin
    public function updateAdmin($id, $data) {
        $sql = "UPDATE admin SET fname=?, lname=?, email=?, phone=?, gender=?, address=?, district=?, country=?, role=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssssssssi", 
            $data['fname'], $data['lname'], $data['email'], $data['phone'], $data['gender'], $data['address'], $data['district'], $data['country'], $data['role'], $id);
        return $stmt->execute();
    }

    // Delete admin
    public function deleteAdmin($id) {
        $stmt = $this->conn->prepare("DELETE FROM admin WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    // Find admin by email (for login)
    public function getAdminByEmail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM admin WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
?>
