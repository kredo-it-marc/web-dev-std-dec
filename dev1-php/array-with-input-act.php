<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Activity</title>
</head>
<body>
    <!-- get the number of countries our user has been to -->
    <form action="" method="post">
        <label for="no-of-countries">How many countries have you been to?</label>
        <input type="number" name="no_of_countries" id="no-of-countries" required>
        <input type="submit" value="Set" name="btn_set">
    </form>

    <!-- 2nd FORM - used to get the name of the COuntries -->
    <form action="" method="post">
        <?php
            if(isset($_POST["btn_set"]))
            {
                //INPUT
                $no_of_countries = $_POST["no_of_countries"];
                
                echo "<hr>";
                
                //PROCESS -display input fields for each country
                for($i=1; $i<=$no_of_countries; $i++)
                {
                    echo "<label for='country-$i'>Country #$i";
                    echo "<input type='text' name='country[]' id='country-$i' required><br><br>";
                }

                echo "<input type='submit' value='Save' name='btn_save'>";
            }
        ?>
    </form>

    <?php
        if(isset($_POST["btn_save"]))
        {
            //INPUT
            $countries = $_POST["country"];

            //PROCESS
            foreach($countries as $country)
            {
                echo "<h1>$country</h1>";
            }
        }
    ?>
</body>
</html>