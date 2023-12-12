<?php
    for($counter = 1; $counter<=10; $counter++)
    {
       if($counter%2==1) //check if the number is ODD
       {
            echo $counter."-"; //display number with dash (-)
       }
       elseif($counter%2 == 0 && $counter != 10)//check if number is EVEN AND not equal to 10
       {
            echo $counter."."; //display number with dot (.)
       }
       else
       {
           echo $counter;
       }
    }
?>