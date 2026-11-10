<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex07_ClassStudents.php</title>
</head>
<body>
    <?php
        /*
        TASK:
        Exercise 7 - Nested arrays
        Create 3 classes, each with a list of student names. Use a foreach inside a foreach to print every class
        and its students, and show how many students each class has.
        */
        $classes = [
            "Class A" => ["Sokha", "Dara", "Maly"],
            "Class B" => ["Vuthy", "Srey", "Piseth", "Kunthea"],
            "Class C" => ["Rithy", "Bopha"]
        ];
        foreach ($classes as $className => $students) {
            echo "<strong>{$className}</strong> (" . count($students) . " students)<br>";
            foreach ($students as $student) {
                echo "&nbsp;&nbsp;- {$student}<br>";
            }
        }
    ?>
</body>
</html>
