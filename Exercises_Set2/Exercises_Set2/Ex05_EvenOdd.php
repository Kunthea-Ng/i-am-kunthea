<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex05_EvenOdd.php</title>
</head>
<body>
    <?php
        $numbers = [3, 8, 15, 22, 7, 10, 41, 6];
        $even = [];
        $odd = [];
        foreach ($numbers as $n) {
            if ($n % 2 == 0) {
                $even[] = $n;
            } else {
                $odd[] = $n;
            }
        }
        echo "Even (" . count($even) . "): " . implode(", ", $even) . "<br>";
        echo "Odd (" . count($odd) . "): " . implode(", ", $odd) . "<br>";
    ?>
</body>
</html>
