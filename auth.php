
<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'] ;
    $password = $_POST['pass'];
    
    
    $valid_id = "46688";
    $valid_password = "admin";
    
    if ($id === $valid_id && $password === $valid_password) {
        
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $id;
        header("Location: form.php");
        exit;
    } else {
       
        header("Location: login.php?error=1");
        exit;
    }
} else {
    
    header("Location: login.php");
    exit;
}
?>
