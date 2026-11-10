<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex04_AddRemoveKeys.php</title>
</head>
<body>
    <?php
        $profile = ["name" => "Sokha", "age" => 22, "city" => "Kampot"];
        $profile["email"] = "sokha@example.com";
        $profile["city"] = "Phnom Penh";
        unset($profile["age"]);
        foreach ($profile as $key => $value) {
            echo "{$key} = {$value}<br>";
        }
        echo array_key_exists("age", $profile) ? "age exists<br>" : "age was removed<br>";
        echo array_key_exists("email", $profile) ? "email exists<br>" : "email missing<br>";
    ?>
</body>
</html>
