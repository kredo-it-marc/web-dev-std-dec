<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Kredo Cafe</title>
</head>
<body>
    <div class="container py-5">
        <div class="card w-25 mx-auto my-3">
            <div class="card-body">
                <form action="" method="post">
                    <label for="no-of-customers" class="form-label">How many customers?</label>
                    <input type="number" name="no_of_customers" id="no-of-customers" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>

        <!-- form handling code, 1st form -->
        <?php
            if(isset($_POST["btn_submit"]))
            {
                //INPUT
                $no_of_customers = $_POST["no_of_customers"];

                echo "<hr><div class='card w-25 mx-auto'>";
                echo "<div class='card-body'>";
                echo "<h1 class='h4'>Enter ages:</h1>";
                
                echo "<form method='post'>";

                    for($i=1; $i<=$no_of_customers; $i++)
                    {
                        echo "<label class='form-label' for='customer-$i'>Customer #$i</label>";
                        echo "<input type='number' name='age[]' id='customer-$i' class='form-control mb-3' required min='0'>";
                    }

                    echo "<input type='submit' name='btn_save' value='Save' class='btn btn-success w-100'>";
                echo "</form>";
        
                echo "</div>";
                echo "</div>";
            }
        ?>

        <!-- form handling 2nd FORM -->
        <?php
            if(isset($_POST["btn_save"]))
            {
                //INPUT
                $ages = $_POST["age"];

                //PROCESS
                $prices = calculatePrice($ages); //it will calculate the price for each customer and this function will return an array
                $total_price = calculateTotalPrice($prices);//will return the total price of all customers

                //OUTPUT
                // insert your code here. display the table
            }
        ?>
    </div>
</body>
</html>