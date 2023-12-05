<h1>INTERNAL / BUILT-IN Function</h1>
<?php
    //INTERNAL / BUILT-IN Function
    $str1 = "i am in lowercase.";
    $str2 = "I AM IN UPPERCASE";
    $num1 = 32.009;

    echo strtoupper($str1); //converts the string to UPPERCASE
    echo "<br>";
    echo strtolower($str2); //converts the string to LOWERCASE
    echo "<br>";
    var_dump($num1); //displays the value and tha data type
    echo "<br>";
    echo isset($x); //returns TRUE if the variable has a value.
?>
<hr>
<h1>User-defined Functions</h1>
<?php
    //function name should start with a letter or an underscore
    //function declaration -> it will not run not unless you call the function
    function displayHelloWorld() //no return, no arguments
    {
        echo "<p>Hello World.</p>";
    }

    function greetUser($user) //no return, 1 argument
    {
        echo "<p>Good morning, $user</p>";
    }

    function add($x,$y) //has return, 2 arguments
    {
        $sum = $x + $y;
        return $sum;
    }

    //function call => runs the function
    //you can call the function multiple of times
    displayHelloWorld();
    displayHelloWorld();
    displayHelloWorld();

    greetUser('Sakura'); //Sakura
    greetUser('Tetsuto'); //Tetsuto

    $ave = add(4, 11) / 2; //15
    echo $ave;


?>