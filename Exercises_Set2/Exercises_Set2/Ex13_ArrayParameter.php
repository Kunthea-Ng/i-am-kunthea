<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex13_ArrayParameter.php</title>
</head>
<body>
    <?php
        function stats($numbers) {
            return [
                "count"   => count($numbers),
                "sum"     => array_sum($numbers),
                "average" => array_sum($numbers) / count($numbers),
                "min"     => min($numbers),
                "max"     => max($numbers)
            ];
        }
        $result = stats([12, 18, 7, 30, 25]);
        foreach ($result as $label => $value) {
            echo ucfirst($label) . ": " . $value . "<br>";
        }
    ?>
</body>
</html>
