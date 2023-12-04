<?php //php delimiter
    // insert the php code here
    echo "Hello World!";
    echo "<p>I am a paragraph.</p>"; 
    echo "Tim" , "Mary";
    // concatenate => means to join
    echo "first word"."second word";

    // NOTE: do not forget to add semicolon. the terminator.
    //php delimiter
?>
<hr>
<h1>Variables</h1>
<?php
    $first_name = "John";
    $last_name = "Smith";
    $age = 21;

    echo "<p>My name is $first_name $last_name. I am $age years old.</p>";
?>
<hr>
<h1>Data Type</h1>
<?php
    $str = "I am a String.";
    $int = 200;
    $float_or_double = 50.001;
    $bool = TRUE;

    var_dump($str);
    echo "<br>";
    var_dump($int);
    echo "<br>";
    var_dump($float_or_double);
    echo "<br>";
    var_dump($bool);
?>
<hr>
<h1>Arithmetic Operators</h1>
<?php
    $num1 = 400;
    $num2 = 12.001;
    $num3 = 25;
    $num4 = 326;

    $sum = $num1 + $num2; //Addition
    $difference = $num2 - $num3; //Subtraction
    $product = $num1 * $num3; //Multiplication
    $quotient = $num1 / $num3; //Division
    $remainder = $num4 % $num3; //Modulo => returns the remainder

    echo "<p>The sum of $num1 and $num2 is $sum</p>";
    echo "<p>The difference of $num2 and $num3 is $difference</p>";
    echo "<p>The product of $num1 and $num3 is $product</p>";
    echo "<p>The quotient of $num1 divided by $num3 is $quotient</p>";
    echo "<p>The remainder of $num4 divided by $num3 is $remainder</p>";
?>
<hr>
<h1>Assignment Operator</h1>
<?php
    $num1 = 16;
    $num2 = 3.004;
    $num3 = 11;
    $num4 = 31.6;
    $num5 = 7;

    echo "<p>Initial Value</p>";
    echo "<p>num1 = $num1</p>";
    echo "<p>num2 = $num2</p>";
    echo "<p>num3 = $num3</p>";
    echo "<p>num4 = $num4</p>";
    echo "<p>num5 = $num5</p>";

    $num1 += 32; //$num1 = $num1 + 32; Addition Assignment Operator
    $num2 -= 1; //$num2 = $num2 - 1; Subtraction Assignment Operator
    $num3 *= 45; //$num3 = $num3 * 45; Multiplication Assignment Operator
    $num4 /= 14; //$num4 = $num4 / 14; Division Assignment Operator
    $num5 %= 3; //$num5 = $num5 % 3; Modulo Assignment Operator

    echo "<p>FINAL Value</p>";
    echo "<p>num1 = $num1</p>";
    echo "<p>num2 = $num2</p>";
    echo "<p>num3 = $num3</p>";
    echo "<p>num4 = $num4</p>";
    echo "<p>num5 = $num5</p>";
?>
<hr>
<h1>Increment</h1>
<?php
    $x = 320;

    echo "<p>Initial value: $x</p>"; //320
    echo "<p>preincrement: ".++$x."</p>"; //321
    echo "<p>postincrement: ".$x++."</p>";//321
    echo "<p>Final Value: $x</p>";//322
?>
<hr>
<h1>Decrement</h1>
<?php
    $y = 49;

    echo "<p>Initial Value: $y</p>"; //49
    echo "<p>predecrement: ".--$y."</p>";//48
    echo "<p>postdecrement: ".$y--."</p>";//48
    echo "<p>Final Value: $y</p>";//47
?>
<hr>
<h1>Comparison Operator</h1>
<?php
    $num1 = 12; //INT
    $num2 = 12.0; //FLoat
    $num3 = 3;
    $num4 = 7.02;

    $equal_to = ($num1 == $num2); //TRUE
    $identical = ($num1 === $num2); //FALSE
    $not_equal1 = ($num2 != $num3); //TRUE
    $not_equal2 = ($num3 <> $num4); //TRUE
    $greater_than = ($num1 > $num3); //TRUE
    $greater_than_or_equal_to = ($num1 >= $num2); //TRUE
    $less_than = ($num3 < $num4); //TRUE
    $less_than_or_equal_to = ($num4 <= $num2); //TRUE

    echo "<p>$num1 == $num2.0 is $equal_to</p>";
    echo "<p>$num1 === $num2.0 is $identical</p>";
    echo "<p>$num2 != $num3 is $not_equal1</p>";
    echo "<p>$num3 <> $num4 is $not_equal2</p>";
    echo "<p>$num1 > $num3 is $greater_than</p>";
    echo "<p>$num1 >= $num2.0 is $greater_than_or_equal_to</p>";
    echo "<p>$num3 < $num4 is $less_than</p>";
    echo "<p>$num4 <= $num2.0 is $less_than_or_equal_to</p>";

?>
<hr>
<h1>Logical Operators</h1>
<?php
    $and1 = TRUE && TRUE; //TRUE
    $and2 = TRUE && FALSE; //FALSE
    $and3 = FALSE && FALSE;//FALSE

    $or1 = TRUE || TRUE; //TRUE
    $or2 = TRUE || FALSE;//TRUE
    $or3 = FALSE || FALSE;//FALSE
    
    $not1 = !TRUE; //FALSE
    $not2 = !FALSE; //TRUE

    echo "<p>TRUE && TRUE is $and1</p>";
    echo "<p>TRUE && FALSE is $and2</p>";
    echo "<p>FALSE && FALSE is $and3</p>";
    echo "<p>TRUE || TRUE is $or1</p>";
    echo "<p>TRUE || FALSE is $or2</p>";
    echo "<p>FALSE || FALSE is $or3</p>";
    echo "<p>!TRUE is $not1</p>";
    echo "<p>!FALSE is $not2</p>";
?>

