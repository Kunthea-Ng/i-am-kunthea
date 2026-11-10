<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex09_SortingArrays.php</title>
</head>
<body>
    <?php
        /*
        TASK:
        Exercise 9 - Sorting
        Sort numbers ascending (sort) and descending (rsort). Sort an associative array by value (asort)
        and by key (ksort).
        */
        $numbers = [42, 7, 19, 3, 88];
        sort($numbers);
        echo "Ascending: " . implode(", ", $numbers) . "<br>";
        rsort($numbers);
        echo "Descending: " . implode(", ", $numbers) . "<br>";

        $ages = ["Sokha" => 22, "Dara" => 19, "Maly" => 25];
        asort($ages);
        echo "By value: ";
        foreach ($ages as $name => $age) { echo "{$name}({$age}) "; }
        echo "<br>";
        ksort($ages);
        echo "By key: ";
        foreach ($ages as $name => $age) { echo "{$name}({$age}) "; }
        echo "<br>";
    ?>
</body>
</html>
