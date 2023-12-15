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
<hr>
<h1>Associative Array</h1>
<?php
    // method 1 - creating an array []
    // Associative array uses named keys/index
    $person = ["name"=>"Nikko", "age"=>25, "address"=>"Tagum City"];

    // method 2 - array();
    $book = array("title"=>"Adventures of Tom Sawyer", "author"=>"Mark Twain", "price"=>10.00);

    //assigning individual values
    // $array_name[key]
    $age["ken"] = 20;
    $age["lance"] = 18;
    $age["mary"] = 19;

    //displaying individual values
    // echo $array_name[key]
    echo $person["name"],"<br>"; //Nikko
    echo $person["age"],"<br>"; //25
    echo $person["address"],"<br>"; //Tagum City
    echo "<br><br>";
    echo $book["title"],"<br>"; //Adventures of Tom Sawyer
    echo $book["author"],"<br>"; //Mark Twain
    echo $book["price"],"<br>"; //10.00
    echo "<br><br>";
    echo $age["ken"],"<br>";//20
    echo $age["lance"],"<br>";//18
    echo $age["mary"],"<br>";//19

    //foreach loop
    foreach($person as $key => $value)
    {
        echo "<p>$key is $value</p>";
    }
?>
<hr>
<h1>2D Associative Array</h1>
<?php
    $market = [
                "round" => ["fruit1"=>"Orange", "fruit2"=>"Grapes"],
                "yellow" => ["fruit3"=>"Banana","fruit4"=>"Mango"]
            ];

    //display individual values
    // $array_name[sub_array][key]
    echo $market["round"]["fruit1"]."<br>";//Orange
    echo $market["round"]["fruit2"],"<br>";//Grapes
    echo $market["yellow"]["fruit3"],"<br>";//Banana
    echo $market["yellow"]["fruit4"],"<br>";//Mango

    foreach($market as $sub_array => $values)
    {
        echo "<h1>$sub_array</h1>";
        
        echo "<ul>";
        foreach($values as $key => $fruit)
        {
            echo "<li>$fruit</li>";
        }
        echo "</ul>";

    }
?>