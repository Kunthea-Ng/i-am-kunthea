<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex14_Palindrome.php</title>
</head>
<body>
    <?php
        function isPalindrome($text) {
            $clean = strtolower(str_replace(" ", "", $text));
            return $clean === strrev($clean);
        }
        $words = ["level", "Never odd or even", "hello", "Madam"];
        foreach ($words as $word) {
            echo "\"{$word}\" is " . (isPalindrome($word) ? "a palindrome" : "not a palindrome") . "<br>";
        }
    ?>
</body>
</html>
