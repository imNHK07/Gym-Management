<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header("Location: login.php"); // redirect to login if not logged in
    exit();
}

// Include your model and fetch admins
include '../model/myDB.php';
$model = new Model();
$model->OpenConn();
$admins = $model->getAllAdmins();
?>

<!DOCTYPE html>
<html>
<head><title>Admin Dashboard</title></head>
<body>
<h2>Welcome, <?php echo $_SESSION['admin_name']; ?></h2>
<a href="../controller/AuthController.php?action=logout">Logout</a>
<h3>Admin List</h3>
<a href="../controller/AdminController.php?action=create">Add New Admin</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Role</th><th>Actions</th>
    </tr>
    <?php while($row = $admins->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['fname'] . ' ' . $row['lname'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['phone'] ?></td>
        <td><?= $row['role'] ?></td>
        <td>
            <a href="../controller/AdminController.php?action=edit&id=<?= $row['id'] ?>">Edit</a> | 
            <a href="../controller/AdminController.php?action=delete&id=<?= $row['id'] ?>" onclick="return confirm('Delete this admin?');">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
