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