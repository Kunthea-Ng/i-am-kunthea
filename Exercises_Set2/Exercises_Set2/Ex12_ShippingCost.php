<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex12_ShippingCost.php</title>
</head>
<body>
    <?php
        function shippingCost($weight, $express = false) {
            $rate = $express ? 4 : 2;
            return $weight * $rate;
        }
        echo "3 kg normal: $" . shippingCost(3) . "<br>";
        echo "3 kg express: $" . shippingCost(3, true) . "<br>";
        echo "10 kg normal: $" . shippingCost(10) . "<br>";
    ?>
</body>
</html>
