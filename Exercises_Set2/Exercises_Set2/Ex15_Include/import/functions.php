<?php
    function formatPrice($price) {
        return "$" . number_format($price, 2);
    }
    function stockStatus($stock) {
        return $stock > 0 ? "In stock" : "Out of stock";
    }
    function totalValue($products) {
        $sum = 0;
        foreach ($products as $p) {
            $sum += $p["price"] * $p["stock"];
        }
        return $sum;
    }
?>
