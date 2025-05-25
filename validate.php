<?php
// Variable initialization
$name = $phone = $address = $gender = $weight = $experience = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Basic sanitization
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $address = htmlspecialchars($_POST["address"]);
    $gender = htmlspecialchars($_POST["gender"] ?? '');
    $weight = htmlspecialchars($_POST["weight"]);
    $experience = htmlspecialchars($_POST["experience"] ?? '');

    // DB Connection
    include 'config.php';

    // Check connection
    if ($conn->connect_error) {
        die("<h2 style='color:red;'>Connection failed: " . $conn->connect_error . "</h2>");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (name, phone, address, gender, weight, experience) VALUES (?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("<h2 style='color:red;'>Prepare failed: " . $conn->error . "</h2>");
    }

    $stmt->bind_param("ssssss", $name, $phone, $address, $gender, $weight, $experience);

    // Execute and check
    if ($stmt->execute()) {
        echo "<h2 style='color:green;'>Form submitted and data saved successfully!</h2>";
    } else {
        echo "<h2 style='color:red;'>Error saving data: " . $stmt->error . "</h2>";
    }

    $stmt->close();
    $conn->close();
}

include 'form.php';
?>