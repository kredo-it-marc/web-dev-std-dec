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
                $ages_count = count($ages);
                
                //PROCESS
                $prices = calculatePrice($ages); //it will calculate the price for each customer and this function will return an array
                $total_price = calculateTotalPrice($prices);//will return the total price of all customers
                
                //OUTPUT
                // insert your code here. display the table
                echo "<table class='table w-25 mx-auto table-bordered'>";
                echo "<thead class='table-dark'>
                        <tr>
                            <th>Age</th>
                            <th>Price</th>
                        </tr>
                      </thead>";
                echo "<tbody>";

                    //$i=0 since the index starts at zero
                    for($i=0;$i<$ages_count; $i++)
                    {
                        echo "<tr>
                                <td>".$ages[$i]."</td>
                                <td>".$prices[$i]."</td>
                              </tr>";
                    }
                echo "<tr class='table-danger'><td>Total Price</td><td>$total_price</td></tr>";
                echo "<tr class='table-primary'><td>Total No. of Customers</td><td>$ages_count</td></tr>";
                echo "</tbody>";
                echo "</table>";
            }
        ?>
    </div>
</body>
</html>
<?php
    function calculatePrice($ages)
    {
        $prices = [];
        $regular_price = 325;

        foreach($ages as $x)
        {
            if(0<=$x && $x<=5) //check if the age is between 0 to 5
            {
                //customer is FREE
                // array_push($array_name, $value); //inserts a value into the array
                array_push($prices,0);
            }
            elseif(6<=$x && $x<=10)//check if age is between 6 to 10
            {
                //apply 10% discount
                //calculate the discounted price
                $discounted_price = $regular_price * .90;
                array_push($prices,$discounted_price);
            }
            elseif(60<=$x) //check if age is 60 and above
            {
                //apply 5% discount
                $discounted_price = $regular_price *.95;
                array_push($prices,$discounted_price);
            }
            else
            {
                array_push($prices,$regular_price); //customer will pay the regular price
            }
        }

        //after calculating the price, return the array containing the prices
        return $prices;
    }

    function calculateTotalPrice($prices)
    {
        $total =0;

        foreach($prices as $x)
        {
            $total += $x; //$total = $total + $x;
        }

        return $total;
    }
?>