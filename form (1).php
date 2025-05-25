<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<h1>Payment Structure</h1>
<table border="2">
    <thead>
        <tr>
            <th>Membership Type</th>
            <th>Duration</th>
            <th>Monthly Fee</th>
            <th>Discount (%)</th>
            <th>Total with Discount</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>Basic</td><td>1 Month</td><td>1,500</td><td>0%</td><td>1500</td></tr>
        <tr><td>Standard</td><td>3 Months</td><td>2,000</td><td>5%</td><td>1900</td></tr>
        <tr><td>Premium</td><td>6 Months</td><td>3,500</td><td>7%</td><td>3150</td></tr>
    </tbody>
</table>

<h1 class="h1">Information Desk</h1>

<form method="post" action="validate.php" onsubmit="return myFun()">
    <fieldset>
        <legend>Personal Information</legend>

        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
        <span id="demo" style="color:red"></span><br><br>

        <label for="phone">Phone: </label>
        <input type="text" id="phone" name="phone">
        <span id="dphone" style="color:red"></span><br><br>

        <label for="address">Address: </label>
        <input type="text" id="address" name="address">
        <span id="demo3" style="color:red"></span><br><br>

        <label>Gender: </label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <span id="demo4" style="color:red"></span><br><br>
    </fieldset>

    <br><br>

    <fieldset>
        <legend>Trainee's Track</legend>

        <label for="weight">Body Weight: </label>
        <input type="text" id="weight" name="weight">
        <span id="demo5" style="color:red"></span><br><br>

        <p>Are you new to gym workout?</p>
        <input type="radio" id="new_yes" name="experience" value="yes">
        <label for="new_yes">Yes I'm new to the gym</label>
        <input type="radio" id="new_no" name="experience" value="no">
        <label for="new_no">No I have trained before</label>
        <span id="demo6" style="color:red"></span><br><br>

        <p>If you have any injuries, please describe them briefly.</p>
        <textarea name="injury_description" id="injury_description" cols="55" rows="10"></textarea><br><br>
    </fieldset>

    <br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
