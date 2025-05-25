<?php
include "../content/action.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Admin Registration</h1>

<form action="../content/action.php" method="post">
  <fieldset>
    <legend>Personal Information</legend>
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname">
    <span style="color:red"><?php echo $name_error ?? ''; ?></span><br><br>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <span style="color:red"><?php echo $email_error ?? ''; ?></span><br><br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone">
    <span style="color:red"><?php echo $phone_error ?? ''; ?></span><br><br>

    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="Male">Male
    <input type="radio" id="female" name="gender" value="Female">Female
    <input type="radio" id="other" name="gender" value="Other">Other      
    <span style="color:red"><?php echo $gender_error ?? ''; ?></span><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password"><br><br>
  </fieldset>

  <fieldset>
    <legend>Contact</legend>
    <label for="address">Home Address:</label>
    <input type="text" id="address" name="address">
    <span style="color:red"><?php echo $address_error ?? ''; ?></span><br><br>

    <label for="district">District:</label>
    <input type="text" id="district" name="district"><br><br>

    <label for="country">Country:</label>
    <input type="text" id="country" name="country">
    <span style="color:red"><?php echo $country_error ?? ''; ?></span><br><br>
  </fieldset>

  <fieldset>
    <legend>Emergency Contact</legend>
    <label for="em_fname">Name:</label><br>
    <input type="text" id="em_fname" name="em_fname" value="First Name">
    <input type="text" id="em_lname" name="em_lname" value="Last Name"><br><br>

    <label for="em_phone">Mobile Number:</label>
    <input type="text" id="em_phone" name="em_phone"><br><br>

    <label for="em_address">Address:</label>
    <input type="text" id="em_address" name="em_address"><br><br>
  </fieldset>

  <input type="submit" name="submit" class="btnsubmit" value="Submit">
</form>
</body>
</html>
