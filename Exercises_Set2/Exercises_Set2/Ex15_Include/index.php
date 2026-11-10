<?php
    require_once('import/functions.php');
    $products = require('import/products.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex15 Include</title>
</head>
<body>
    <?php
        /*
        TASK:
        Exercise 15 - Include a small shop
        Keep the product data in import/products.php, the helper functions in import/functions.php and the
        header/footer in their own files. Import them all and show every product with price and stock status,
        then the total stock value.
        */
        include('import/header.php');
    ?>
    <ul>
        <?php foreach ($products as $p) { ?>
            <li><?= $p["name"]; ?> - <?= formatPrice($p["price"]); ?> - <?= stockStatus($p["stock"]); ?></li>
        <?php } ?>
    </ul>
    <p>Total stock value: <strong><?= formatPrice(totalValue($products)); ?></strong></p>
    <?php include('import/footer.php'); ?>
</body>
</html>
