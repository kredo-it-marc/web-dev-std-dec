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
        <?php
            if(isset($_POST["btn_submit"]))
            {
                //INPUT
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];

                //PROCESS & OUTPUT
                //$num1 < $num2 < $num3 => INCREASING
                if($num1<$num2 && $num2 < $num3)
                {
                    echo "<div class='alert alert-primary text-center w-50 mx-auto'> Numbers $num1, $num2 and $num3 are in INCREASING order</div>";
                }
                elseif( $num1>$num2 && $num2 > $num3 ) //$num1 > $num2 > $num3
                {
                    echo "<div class='alert alert-success text-center w-50 mx-auto'> Numbers $num1, $num2 and $num3 are in DECREASING order</div>";
                }
                else
                {
                    echo "<div class='alert alert-warning text-center w-50 mx-auto'> Numbers $num1, $num2 and $num3 are NEITHER in INCREASING nor DECREASING order</div>";
                }
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="num1" class="form-label">Number 1</label>
                    <input type="number" name="num1" id="num1" class="form-control mb-3" required>
                    <label for="num2" class="form-label">Number 2</label>
                    <input type="number" name="num2" id="num2" class="form-control mb-3" required>
                    <label for="num3" class="form-label">Number 3</label>
                    <input type="number" name="num3" id="num3" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
