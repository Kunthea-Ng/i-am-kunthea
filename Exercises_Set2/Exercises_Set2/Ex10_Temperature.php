<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex10_Temperature.php</title>
</head>
<body>
    <?php
        function celsiusToFahrenheit($c) {
            return ($c * 9 / 5) + 32;
        }
        function fahrenheitToCelsius($f) {
            return ($f - 32) * 5 / 9;
        }
        $celsiusList = [0, 25, 37, 100];
        foreach ($celsiusList as $c) {
            echo "{$c} C = " . round(celsiusToFahrenheit($c), 1) . " F<br>";
        }
        echo "98.6 F = " . round(fahrenheitToCelsius(98.6), 1) . " C<br>";
    ?>
</body>
</html>
