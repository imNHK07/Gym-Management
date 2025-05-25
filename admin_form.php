<!DOCTYPE html>
<html>
<head><title>Admin Form</title></head>
<body>
<h2><?php echo isset($admin) ? 'Edit' : 'Add'; ?> Admin</h2>
<form method="post" action="">
    First Name: <input type="text" name="fname" value="<?php echo $admin['fname'] ?? ''; ?>" required><br><br>
    Last Name: <input type="text" name="lname" value="<?php echo $admin['lname'] ?? ''; ?>" required><br><br>
    Email: <input type="email" name="email" value="<?php echo $admin['email'] ?? ''; ?>" required><br><br>
    Phone: <input type="text" name="phone" value="<?php echo $admin['phone'] ?? ''; ?>" required><br><br>
    Gender:
    <input type="radio" name="gender" value="Male" <?php if (($admin['gender'] ?? '') == 'Male') echo 'checked'; ?>> Male
    <input type="radio" name="gender" value="Female" <?php if (($admin['gender'] ?? '') == 'Female') echo 'checked'; ?>> Female
    <input type="radio" name="gender" value="Other" <?php if (($admin['gender'] ?? '') == 'Other') echo 'checked'; ?>> Other
    <br><br>
    Address: <input type="text" name="address" value="<?php echo $admin['address'] ?? ''; ?>" required><br><br>
    District: <input type="text" name="district" value="<?php echo $admin['district'] ?? ''; ?>" required><br><br>
    Country: <input type="text" name="country" value="<?php echo $admin['country'] ?? ''; ?>" required><br><br>

    <?php if (!isset($admin)): ?>
    Password: <input
