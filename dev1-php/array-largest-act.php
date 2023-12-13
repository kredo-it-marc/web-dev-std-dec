<?php
    $numbers = [15, 11, 32.07, 5.01, 100.0, 25, 2, 45.7];

    //display the largest value in the array
    $largest_number = NULL; //NULL means empty or no value

    foreach($numbers as $x)
    {
        if($largest_number < $x) 
        {
            $largest_number = $x;
        }
    }

    echo "<p>The largest value is $largest_number</p>";
?>