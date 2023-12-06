<?php
    // determine the largest value
    $num1 = 50000;
    $num2 = 6000;
    $num3 = 7000;

    //use if-statement only
    if($num1> $num2 && $num1>$num3) //check if $num1 has the largest value
    {
        echo "<p>$num1 is the largest value.</p>";
    }

    if($num2 > $num1 && $num2>$num3)//check if $num2 has the largest value
    {
        echo "<p>$num2 is the largest value.</p>";
    }

    if($num3>$num1 && $num3>$num2)//check if $num3 has the largest value
    {
        echo "<p>$num3 is the largest value.</p>";
    }
?>