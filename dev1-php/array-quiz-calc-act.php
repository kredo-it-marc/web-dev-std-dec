<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Quiz Calculator</title>
</head>
<body>
    <div class="container py-5">
        <div class="card w-25 mx-auto my-3">
            <div class="card-body">
                <form action="" method="post">
                    <label for="no-of-quizzes" class="form-label">Enter number of quizzes:</label>
                    <input type="number" name="no_of_quizzes" id="no-of-quizzes" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
        <?php
            if(isset($_POST["btn_submit"]))
            {
                //INPUT
                $no_of_quizzes = $_POST["no_of_quizzes"];

                echo "<hr><div class='card w-25 mx-auto'>";
                echo "<div class='card-body'>";
                echo "<h1 class='h4'>Enter scores:</h1>";
                
                echo "<form method='post'>";

                    for($i=1; $i<=$no_of_quizzes; $i++)
                    {
                        echo "<label class='form-label' for='quiz-$i'>Quiz #$i</label>";
                        echo "<input type='number' name='score[]' id='quiz-$i' class='form-control mb-3' required min='0'>";
                    }

                    echo "<input type='submit' name='btn_calculate' value='Calculate' class='btn btn-success w-100'>";
                echo "</form>";
        
                echo "</div>";
                echo "</div>";
            }
        ?>

        <!-- Form handling code, 2nd form -->
        <?php
            if(isset($_POST["btn_calculate"]))
            {
                //INPUT
                $scores=$_POST["score"];
                $scores_count = count($scores);

                //PROCESS
                $sum = 0;

                foreach($scores as $x)
                {
                    $sum+= $x; //$sum = $sum+$x;
                }

                $average = $sum / $scores_count;

                //OUTPUT
                echo "<div class='alert alert-primary w-50 text-center mx-auto'>The average of the scores is $average</div>";
            }
        ?>
    </div>
</body>
</html>