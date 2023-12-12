<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>FooBar</title>
</head>
<body>
    <div class="container py-5">
        <div class="text-center mb-3" style="overflow:scroll;">
            <?php
                if(isset($_POST["btn_submit"]))
                {
                    //INPUT
                    $start = $_POST["start"];
                    $end = $_POST["end"];

                    //PROCESS
                    if($start<$end) //ascending 0-9
                    {
                        for($counter = $start; $counter<=$end; $counter++)
                        {
                            if($counter%3 == 0 && $counter%5 == 0) //check if the number is divisible by 3 AND 5
                            {
                                echo "<span class='fw-bold text-success me-3'>FOOBAR</span>";
                            }
                            elseif($counter%3 == 0) //check if the number is divisible by 3 only
                            {
                                echo "<span class='fw-bold text-primary me-3'>FOO</span>";
                            }
                            elseif($counter%5==0) //check if the number is divisble by 5 only
                            {
                                echo "<span class='fw-bold text-warning me-3'>BAR</span>";
                            }
                            else
                            {
                                echo "<span class='text-muted me-3'>$counter</span>";
                            }
                        }
                    }
                    elseif($start>$end)//descending 9-0
                    {
                        for($counter=$start; $counter>=$end; $counter--)
                        {
                            if($counter%3 == 0 && $counter%5 == 0) //check if the number is divisible by 3 AND 5
                            {
                                echo "<span class='fw-bold text-success me-3'>FOOBAR</span>";
                            }
                            elseif($counter%3 == 0) //check if the number is divisible by 3 only
                            {
                                echo "<span class='fw-bold text-primary me-3'>FOO</span>";
                            }
                            elseif($counter%5==0) //check if the number is divisble by 5 only
                            {
                                echo "<span class='fw-bold text-warning me-3'>BAR</span>";
                            }
                            else
                            {
                                echo "<span class='text-muted me-3'>$counter</span>";
                            }
                        }
                    }
                    else //start and end are the same
                    {
                        if($start%3 == 0 && $start%5 == 0) //check if the number is divisible by 3 AND 5
                        {
                            echo "<span class='fw-bold text-success me-3'>FOOBAR</span>";
                        }
                        elseif($start%3 == 0) //check if the number is divisible by 3 only
                        {
                            echo "<span class='fw-bold text-primary me-3'>FOO</span>";
                        }
                        elseif($start%5==0) //check if the number is divisble by 5 only
                        {
                            echo "<span class='fw-bold text-warning me-3'>BAR</span>";
                        }
                        else
                        {
                            echo "<span class='text-muted me-3'>$start</span>";
                        }
                    }

                }
            ?>
        </div>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <label for="start" class="form-label">Start</label>
                    <input type="number" name="start" id="start" class="form-control mb-3" required>
                    <label for="end" class="form-label">End</label>
                    <input type="number" name="end" id="end" class="form-control mb-3" required>
                    <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
