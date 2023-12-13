<h1>Indexed Array</h1>
<?php
    //Creating an array - Method 1 []
    $fruits = ["Banana","Apple", "Mango"];

    //Creating an array - Method 2 array()
    $vegetables = array("Carrots","Broccoli","Cauliflower");

    //Assigning individual values
    // array_name[index] = value;
    $students[0]= "Akito";
    $students[1]= "Fuyuka";
    $students[2]= "Moe";
    $students[3]= "Kozue";

    //print_r() => display the array in human-readable format
    print_r($fruits);
    echo "<br>";
    print_r($vegetables);
    echo "<br>";
    print_r($students);
    echo "<br>";

    //count() => returns how many values/elements there are in the array
    echo count($fruits); //3
    echo "<br>";
    echo count($vegetables); //3
    echo "<br>";
    echo count($students); //4
    echo "<br>";

    //display individual values
    // echo $array_name[index];

    echo $fruits[0],"<br>"; //Banana
    echo $fruits[1],"<br>";//Apple
    echo $fruits[2],"<br>"; //Mango
    echo "<hr>";
    echo $vegetables[0],"<br>";//Carrots
    echo $vegetables[1],"<br>";//Broccoli
    echo $vegetables[2],"<br>";//Cauliflower
    echo "<hr>";
    echo $students[0],"<br>"; //Akito
    echo $students[1],"<br>"; //Fuyuka
    echo $students[2],"<br>"; //Moe
    echo $students[3],"<br>"; //Kozue

    echo "<hr>";
    //foreach()

    echo "<ul>";
    // foreach($array_name as $var)
    foreach($fruits as $x)
    {
        echo "<li>$x</li>";
    }
    echo "</ul>";

    echo "<hr>";

    echo "<ul>";
    // foreach($array_name as $var)
    foreach($vegetables as $veg)
    {
        echo "<li>$veg</li>";
    }
    echo "</ul>";

    echo "<hr>";

    echo "<ul>";
    // foreach($array_name as $var)
    foreach($students as $stud)
    {
        echo "<li>$stud</li>";
    }
    echo "</ul>";


?>