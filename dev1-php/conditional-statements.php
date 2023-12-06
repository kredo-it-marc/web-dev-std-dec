<h1>If Statement</h1>
<?php
    $num = 50;

    if( $num < 20 )
    {
        //if-block => the code here only runs if the condition is TRUE
        echo "<p>$num is less than 20</p>";
    }
?>
<hr>
<h1>If-Else Statement</h1>
<?php
    $age = 25;

    if( $age >= 18 )
    {
        //if-block => code here runs if the condition is TRUE
        echo "<p>You are of legal age.</p>";
    }
    else
    {
        //else-block => code here runs if the condition is FALSE
        echo "<p>You are a minor.</p>";
    }
?>
<hr>
<h1>If-elsif-else Statment</h1>
<?php
    // THere should be 1 if and 1 else only
    //else statement is optional
    // You can have 2 or more elsif statments

    /**
     * pH
     * 0-6 => acidic
     * 7 => neutral
     * 8-14 => alkaline/basic
     */

    $ph = 500;

    if(0 <= $ph && $ph <= 6) //check if $ph is between 0-6
    {
        echo "<p>$ph is ACIDIC</p>";
    }
    elseif($ph == 7) //check if $ph is equal to 7
    {
        echo "<p>$ph is NEUTRAL</p>";
    }
    elseif(8<=$ph && $ph<=14) //check if $ph is between 8-14
    {
        echo "<p>$ph is ALKALINE/BASIC</p>";
    }
    else
    {
        echo "<p>$ph is INVALID</p>";
    }
?>