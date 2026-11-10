<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02_PricesWithTax.php</title>
</head>
<body>
    <?php
        $prices = [10, 25.5, 40, 7.25, 100];
        foreach ($prices as $price) {
            $newPrice = $price * 1.10;
            echo "Old: $" . number_format($price, 2) . " -> New: $" . number_format($newPrice, 2) . "<br>";
        }
    ?>
</body>
</html>
