<?php
    $jap_regions = [
        "Hokkaido" => ["Hokkaido" => "Sapporo"],
        "Chubu" => ["Ishikawa" => "Kanazawa", "Shizuoka" => "Fuji", "Toyama" => "Toyama", "Aichi" => "Nagoya"],
        "Chugoku" => ["Yamaguchi" => "Shimonoseki", "Tottori" => "Tottori"]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2D Activity</title>
    <style>
        table,th,td{
            border: 1px solid black;
        }

        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        foreach($jap_regions as $region => $prefecture_city) //outer loop
        {
            echo "<h1>$region</h1>";
            
            echo "<table>
                    <thead>
                        <tr><th>Prefecture</th><th>City</th></tr>
                    </thead>
                    <tbody>";

            foreach($prefecture_city as $prefecture => $city) //inner loop
            {
                echo "<tr>
                        <td>$prefecture</td>
                        <td>$city</td>
                      <tr>";

            }

            echo "</tbody></table>";
        }
    ?>
</body>
</html>