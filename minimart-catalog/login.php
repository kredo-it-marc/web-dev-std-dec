<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Minimart Catalog | Login</title>
</head>
<body class="bg-light" style="min-height:100vh;">
    <div class="container py-5">
        <?php
            if(isset($_POST["btn_submit"]))
            {
                //INPUT
                $username = $_POST["username"];
                $password = $_POST["password"];

                //PROCESS
                login($username, $password);
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-header">
                <h1 class="display-5 text-center card-title">Login</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" required class="form-control mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-3" required>
                    <input type="submit" value="Login" name="btn_submit" class="btn btn-primary w-100">
                </form>
                <p class="my-3 text-center text-muted">Doesn't have an account? <a href="sign-up.php">Sign up here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    function login($username, $password)
    {
        $conn = dbConnect(); //connect to the database
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql); //run the sql statement

        // $result->num_rows returns how many results are returned by the sql statement
        if($result->num_rows == 1) //check if the sql statement has returned a result
        {
            $user_details = $result->fetch_assoc();
            // $result->fetch_assoc() returns 1 row from the result. That row is returned as an associative array. THe column names are the keys and the data is the value.
            $encrypted_password = $user_details["password"];

            $password_match = password_verify($password,$encrypted_password); //compare if the passwords match

            if($password_match) 
            {
                session_start(); //connect to the session
                //Assign values in your session
                $_SESSION["user_id"] = $user_details["id"];
                $_SESSION["username"] = $user_details["username"];
                
                header("Location:products.php");
            }
            else
            {
                echo "<div class='alert alert-danger w-50 mx-auto text-center mb-3'>Incorrect password. Kindly try again.</div>";
            }
        }
        else
        {
            echo "<div class='alert alert-danger w-50 mx-auto text-center mb-3'>Incorrect username. Kindly try again.</div>";
        }

    }
?>