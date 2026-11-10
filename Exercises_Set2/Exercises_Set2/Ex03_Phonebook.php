<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex03_Phonebook.php</title>
</head>
<body>
    <?php
        $phonebook = [
            "Sophea" => "012 345 678",
            "Dara"   => "097 111 222",
            "Vuthy"  => "085 999 000"
        ];
        $searchNames = ["Dara", "Mina"];
        foreach ($searchNames as $name) {
            if (isset($phonebook[$name])) {
                echo "{$name}: {$phonebook[$name]}<br>";
            } else {
                echo "{$name}: Not found<br>";
            }
        }
    ?>
</body>
</html>
