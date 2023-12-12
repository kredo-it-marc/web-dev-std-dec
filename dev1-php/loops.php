<h1>While Loop</h1>
<?php
    $num = 1;

    while( $num < 5 )
    {
        //while-block or loop body. The code here runs repeatedly if the condition is TRUE. THe loop stops if the condition is FALSE.
        echo "<p>$num: is less than 5.</p>";
        $num++;
    }

?>
<hr>
<h1>Do-While Loop</h1>
<?php
    $num = 1;

    do{
        //do-block / loop body
        echo "<p>$num: is less than 5</p>";
        $num++;
    }while($num<5);
?>
<hr>
<h1>For Loop</h1>
<?php

    for($counter = 1; $counter < 5; $counter++)
    {
        //for-block / loop body
        echo "<p>$counter: is less than 5</p>";
    }
?>
<hr>
<h1>Nested Loop</h1>
<?php
    for($i=1; $i<=5; $i++) //outer loop => use this to display the levels/rows
    {
        for($j=1; $j<=5; $j++)//inner loop => used to display the 5 stars in every level
        {
            echo "*";
        }
        echo "<br>";
    }
?>
<hr>
<h1>For star Activity</h1>
<?php
    for($i=1; $i<=7; $i++)//outer loop, display levels
    {
        for($j=1; $j<=$i; $j++)//inner loop, display the stars
        {
            echo "*";
        }
        echo "<br>";
    }
?>
<hr>
<h1>Number Pyramid</h1>
<?php
    for($i=1; $i<=5; $i++)//outer loop
    {
        for($j=1; $j<=$i; $j++)//inner loop, display numbers
        {
            echo $j;
        }
        echo "<br>";
    }
?>