<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!-- action => WHERE your data will be sent when you click submit -->
    <!-- method => HOW your data will be sent to your action -->
    <!-- GET => sends the data thru the URL -->
    <!-- POST => sends the data invisibly -->

    <?php
        if( isset($_POST["btn_login"]) ) //check if the button is clicked
        {
            //INPUT => take the user input
            $username = $_POST["username"];
            $password = $_POST["password"];

            //PROCESS the user input

            //OUTPUT => display an output
            echo "<p>Username: $username</p>";
            echo "<p>Password: $password</p>";
        }
    ?>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Submit" name="btn_login">
    </form>

</body>
</html>