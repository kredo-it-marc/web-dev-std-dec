<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Arithmetic Activity</title>
</head>
<body>
    <div class="container py-5">
        <?php
            // FORM HANDLING CODE
            if( isset($_POST["btn_submit"]) )
            {
                // DO NOT DECLARE FUNCTION HERE (START)
                //INPUT
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];

                //PROCESS
                $sum = add($num1, $num2);
                $difference = subtract($num1, $num2);
                $product = multiply($num1, $num2);
                $quotient = divide($num1, $num2);

                //OUTPUT
                echo "<div class='alert alert-primary w-50 mx-auto text-center'>The sum of $num1 and $num2 is $sum</div>";
                echo "<div class='alert alert-success w-50 mx-auto text-center'>The difference of $num1 and $num2 is $difference</div>";
                echo "<div class='alert alert-warning w-50 mx-auto text-center'>The product of $num1 and $num2 is $product</div>";
                echo "<div class='alert alert-danger w-50 mx-auto text-center'>The quotient of $num1 divided by $num2 is $quotient</div>";

                // DO NOT DECLARE FUNCTION HERE (END)
            }
        ?>
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
<?php
    //function declaration
    // declare the function separate from the form handling code.
    function add($x, $y)
    {
        $sum = $x + $y;
        return $sum;
    }

    function subtract($x, $y)
    {
        $difference = $x-$y;
        return $difference;
    }

    function multiply($x,$y)
    {
        $product = $x * $y;
        return $product;
    }

    function divide($x, $y)
    {
        $quotient = $x / $y;
        return $quotient;
    }
?>