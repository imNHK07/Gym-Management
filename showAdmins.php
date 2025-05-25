<?php
include("../model/myDB.php");

$model = new Model();
$conn = $model->OpenConn();
$result = $model->GetAdmins($conn, "admin_registration");

echo "<h2>All Admins</h2>";
echo "<table border='1'>
<tr>
<th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Gender</th><th>Address</th><th>District</th><th>Country</th><th>Role</th><th>Actions</th>
</tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["fname"]."</td>
        <td>".$row["lname"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["phone"]."</td>
        <td>".$row["gender"]."</td>
        <td>".$row["address"]."</td>
        <td>".$row["district"]."</td>
        <td>".$row["country"]."</td>
        <td>".$row["role"]."</td>
        <td>
            <a href='../controller/AdminController.php?edit=".$row["id"]."'>Edit</a> |
            <a href='../controller/AdminController.php?delete=".$row["id"]."'>Delete</a>
        </td>
        </tr>";
    }
}
echo "</table>";
?>
