<!--Excercise 3-4-->
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <title>Perfect Palindrome</title>
</head>
<body>
<h1>Perfect Palindrome Check</h1><hr />
    <?php
        $firstString = "Rotator";
        $secondString = "I did did I";
        $thirdString = "No lemon no melon";
        $fourthString = "105501";

        isPerfectPalindrome($firstString);
        isPerfectPalindrome($secondString);
        isPerfectPalindrome($thirdString);
        isPerfectPalindrome($fourthString);

        function isPerfectPalindrome($testString){
            $originalString = $testString;
            $testString = strtolower($testString);
            if(strrev($testString) == $testString)
                echo "\"" . $originalString . "\" is a perfect palindrome.<br />";
            else
                echo "\"" . $originalString . "\" is not a perfect palindrome.<br />";
        }
    ?>
</body>
</html>