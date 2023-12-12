<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Activity</title>
</head>
<body>
    <?php
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $base = $_POST["base"];

            //PROCESS
            if($base >= 0) //check if the base is not a negative number
            {
                $factorial = factorial($base);
                //OUTPUT
                 echo displayOutput($base, $factorial);
            }
            else
            {
                echo "<p>$base is INVALID</p>";
            }
        }
    ?>
    <form action="" method="post">
        <label for="base" class="form-label">Enter base number:</label>
        <input type="number" name="base" id="base" required min="0">
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>
<?php
    function factorial($base)
    {
        $factorial = 1;

        if($base == 0)
        {
            return $factorial;
        }
        else
        {
            // counter=1; $counter<=$base; $counter++ ascending 0-9
            for($counter=$base; $counter>=1; $counter--) //descending 9-0
            {
                $factorial *= $counter; //$factorial = $factorial * $counter
            }
            return $factorial;
        }
    }

    function displayOutput($base, $factorial)
    {
        return "<p>The factorial of $base is $factorial.</p>";
    }
?>