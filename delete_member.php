
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['phone'])) {
    include 'config.php';
    
    $phone = $_GET['phone'];
    $stmt = $conn->prepare("DELETE FROM users WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    
    if ($stmt->execute()) {
        header("Location: member_list.php?deleted=1");
    } else {
        header("Location: member_list.php?error=1");
    }
    
    $stmt->close();
    $conn->close();
} else {
    header("Location: member_list.php");
}
?>
