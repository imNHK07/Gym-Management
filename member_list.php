
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Member List</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .sidebar {
            width: 200px;
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            background: #2c3e50;
            padding-top: 20px;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #34495e;
        }
        .main-content {
            margin-left: 220px;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .action-btns a {
            padding: 5px 10px;
            margin: 0 5px;
            text-decoration: none;
            border-radius: 3px;
        }
        
        .delete-btn {
            background-color: #e74c3c;
            color: white;
        }
        .success-msg {
            color: green;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="form.php">New Member</a>
        <a href="member_list.php">Member List</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="main-content">
        <h1>Member List</h1>
        
        <?php if (isset($_GET['success'])): ?>
            <div class="success-msg">Member data saved successfully!</div>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Weight</th>
                    <th>Experience</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT name, phone, address, gender, weight, experience FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['name']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['weight']}</td>
                            <td>{$row['experience']}</td>
                            <td class='action-btns'>
                             
                                <a href='delete_member.php?phone={$row['phone']}' class='delete-btn' onclick='return confirm(\"Are you sure you want to delete this member?\")'>Delete</a>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No members found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
