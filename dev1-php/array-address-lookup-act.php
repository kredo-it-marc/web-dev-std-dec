<?php
    $contacts = ["Sakura"=>"Japan","John"=>"USA", "Kim"=>"Vietnam", "Eliza"=>"Singapore", "Ling"=>"China", "Tetsuto"=>"Japan"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Green Pages</title>
</head>
<body>
    <form action="" method="post">
        <!-- 
            1. display the names of the contact person based on the array
         -->
        <label for="contact">Select a Contact</label>
        <select name="contact" id="contact" required>
            <?php
                foreach($contacts as $name => $address)
                {
                    echo "<option value='$name'>$name</option>";
                }
            ?>
        </select>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
    
    <!-- 
        FORM HANDLING CODE
        2. get the selected name then display the name and address
     -->
    <?php
        if(isset($_POST["btn_submit"]))
        {
            //INPUT
            $name = $_POST["contact"]; //we get the name of the person

            //PROCESS
            $address = $contacts[$name];//use the name of the person as the key/index

            //OUTPUT
            echo "<p>Name: $name</p>";
            echo "<p>Address: $address</p>";
        }
    ?>
</body>
</html>