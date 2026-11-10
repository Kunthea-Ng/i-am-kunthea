<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex08_MergeSliceReverse.php</title>
</head>
<body>
    <?php
        /*
        TASK:
        Exercise 8 - Merge, slice and reverse
        Merge two arrays with array_merge(), take the first 3 items with array_slice(), and reverse the result
        with array_reverse().
        */
        $boys  = ["Sokha", "Dara"];
        $girls = ["Maly", "Srey", "Bopha"];
        $all = array_merge($boys, $girls);
        echo "Merged: " . implode(", ", $all) . "<br>";
        $firstThree = array_slice($all, 0, 3);
        echo "First 3: " . implode(", ", $firstThree) . "<br>";
        $reversed = array_reverse($all);
        echo "Reversed: " . implode(", ", $reversed) . "<br>";
    ?>
</body>
</html>
