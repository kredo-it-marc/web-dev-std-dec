<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Activity</title>
</head>
<body>
    <?php
        if(isset($_POST["btn_submit"]))
        {
            //INPUT
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            //PROCESS and OUTPUT
            if($num1 > $num2)
            {
                $difference = $num1 - $num2;
                echo "<p>The difference of $num1 and $num2 is $difference</p>";
            }
            else
            {
                $product = $num1 * $num2;
                echo "<p>The product of $num1 and $num2 is $product</p>";
            }

        }
    ?>
    <form action="" method="post">
        <label for="num1">Number 1</label>
        <input type="number" name="num1" id="num1" required>
        <label for="num2">Number 2</label>
        <input type="number" name="num2" id="num2" required>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>