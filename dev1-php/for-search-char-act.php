<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Search Activity</title>
</head>
<body>
    <div class="container py-5">
        <?php
            if(isset($_POST["btn_submit"]))
            {
                //INPUT
                $word = $_POST["word"]; //1. get a word from User
                $word_lower = strtolower($word); //2. convert the input to lowercase
                $word_length = strlen($word);//3. count how many characters there are in the input
                
                $vowel_count = 0; //hold/keep track of the number of vowels in the string. it will be updated if the conditions in your if statement evaluates to TRUE.

                //process
                for($i=0; $i<$word_length; $i++)
                {
                    // $char = substr(word,index/offset,length);
                    $char = substr($word_lower,$i,1); //get 1 letter/character from the input/word/string

                    //check if the character/letter  is a vowel (a, e, i, o, u)
                    if($char == 'a' || $char=='e' || $char=='i' || $char == 'o' || $char=='u')
                    {
                        $vowel_count++; //update the number of vowels
                    }
                }

                //OUTPUT
                echo "<div class='alert alert-success w-50 mx-auto mb-3 text-center'>The word $word has $vowel_count vowels.</div>";
            }
        ?>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="word" class="form-label">Word</label>
                    <input type="text" name="word" id="word" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>