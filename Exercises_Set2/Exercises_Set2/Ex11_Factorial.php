<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex11_Factorial.php</title>
</head>
<body>
    <?php
        function factorial($n) {
            $result = 1;
            for ($i = 2; $i <= $n; $i++) {
                $result *= $i;
            }
            return $result;
        }
        function isPrime($n) {
            if ($n < 2) return false;
            for ($i = 2; $i * $i <= $n; $i++) {
                if ($n % $i == 0) return false;
            }
            return true;
        }
        foreach ([0, 1, 5, 7] as $n) {
            echo "{$n}! = " . factorial($n) . "<br>";
        }
        foreach ([1, 2, 9, 13, 20] as $n) {
            echo "{$n} is " . (isPrime($n) ? "prime" : "not prime") . "<br>";
        }
    ?>
</body>
</html>
