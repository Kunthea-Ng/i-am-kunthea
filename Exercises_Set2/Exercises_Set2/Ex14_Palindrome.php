<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex14_Palindrome.php</title>
</head>
<body>
    <?php
        /*
        TASK:
        Exercise 14 - Palindrome
        Create a function isPalindrome($text) that ignores case and spaces. Test it with several words
        (e.g. "level", "Never odd or even", "hello").
        */
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
