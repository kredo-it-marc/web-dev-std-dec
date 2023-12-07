<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Consonant or Vowel</title>
</head>
<body>
    <div class="container py-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $letter = $_POST["letter"];
                $letter_lowercase = strtolower($letter);
                $letter_count = strlen($letter);
                $is_letter = ctype_alpha($letter); //returns TRUE if the string is made up of letters. Otherwise, FALSE.
                //$is_letter is FALSE, it means the input has characters other than letters. Most probably, number and punctuation marks.

                //PROCESS & OUTPUT
                if($letter_lowercase == 'a' || $letter_lowercase == 'e' || $letter_lowercase == 'i' || $letter_lowercase == 'o' || $letter_lowercase == 'u') //check if the input is a VOWEL => aeiou
                {
                    echo "<div class='alert alert-primary w-50 mx-auto text-center'>$letter is a VOWEL</div>";
                }
                elseif( $letter_count != 1 || $is_letter == FALSE) //check if the input is invalid
                {
                    echo "<div class='alert alert-danger w-50 mx-auto text-center'>$letter is INVALID</div>";
                }
                else
                {
                    echo "<div class='alert alert-success w-50 mx-auto text-center'>$letter is a CONSONANT</div>";
                }
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="letter" class="form-label">Letter</label>
                    <input type="text" name="letter" id="letter" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
