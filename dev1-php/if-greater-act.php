<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>If Else Greater</title>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center mb-3">
            <?php
                if(isset($_POST["btn_submit"]))
                {
                    //INPUT
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];

                    //PROCESS & OUTPUT
                    if($num1 > $num2)
                    {
                        echo "<div class='col-3 bg-success p-3'><h1 class='text-white text-center'>$num1</h1></div>";
                        echo "<div class='col-3 bg-warning p-3'><h1 class='text-white text-center'>$num2</h1></div>";
                    }
                    elseif($num2 > $num1)
                    {
                        echo "<div class='col-3 bg-success p-3'><h1 class='text-white text-center'>$num2</h1></div>";
                        echo "<div class='col-3 bg-warning p-3'><h1 class='text-white text-center'>$num1</h1></div>";
                    }
                    else
                    {
                        echo "<div class='col-6 bg-info p-3'><h1 class='text-white text-center'>$num1</h1></div>";
                    }
                }
            ?>
        </div>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="num1" class="form-label">Number 1</label>
                    <input type="number" name="num1" id="num1" class="form-control mb-3" required>
                    <label for="num2" class="form-label">Number 2</label>
                    <input type="number" name="num2" id="num2" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
