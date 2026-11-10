<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex01_DaysOfWeek.php</title>
</head>
<body>
    <?php
        /*
        TASK:
        Exercise 1 - Days of the week
        Store the 7 days in an array. Print each day with its position number using foreach and a counter.
        Mark Saturday and Sunday as "Weekend".
        */
        $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        $position = 1;
        foreach ($days as $day) {
            $label = ($day == "Saturday" || $day == "Sunday") ? " (Weekend)" : "";
            echo $position . ". " . $day . $label . "<br>";
            $position++;
        }
    ?>
</body>
</html>
