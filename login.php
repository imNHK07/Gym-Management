<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(240, 240, 240);
            text-align: center;
            margin-top: 125px;
        }

        form {
            background-color: white;
            display: inline-block;
            padding: 50px;
            border: 2px solid black;
            border-radius: 15px;
        }

        label {
            display: block;
            margin: 15px 0px 15px;
        }

        input[type="text"] {
            padding: 8px;
            width: 200px;
            border: 1px solid,black;
            border-radius: 5px;
        }

        input[type="submit"] {
            margin-bottom: 15px;
            padding: 8px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

        <script src="check.js"></script>


    <form method="post" action="form.php" onsubmit="return valid()"  autocomplete="off">
        <fieldset>
            <legend><strong>Login</strong></legend>

            <label for="id">Admin ID:</label>
            <input type="text" id="id" name="id" autocomplete="off">
            <p id="demoid" style="color:red;"> </p>

            <label for="pass">Password:</label>
            <input type="text" id="pass" name="pass" autocomplete="off">
            <p id="demopass" style="color:red;"> </p>

            <input type="submit" value="Login">
        </fieldset>
    </form>

</body>
</html>
