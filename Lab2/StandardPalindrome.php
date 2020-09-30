<!--Excercise 3-4-->
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <title>Standard Palindrome</title>
</head>
<body>
<h1>Standard Palindrome Check</h1><hr />
    <?php
        $firstString = "Red rum, sir, is murder";
        $secondString = "I did did I";
        $thirdString = "No lemon no melon";
        $fourthString = "Rivers and roads";

        isStandardPalindrome($firstString);
        isStandardPalindrome($secondString);
        isStandardPalindrome($thirdString);
        isStandardPalindrome($fourthString);

        function isStandardPalindrome($testString){
            $originalString = $testString;
            $testString = strtolower($testString);
            if(strrev($testString) == $testString)
                echo "\"" . $originalString . "\" is a perfect palindrome.<br />";
            else {
                $testString = preg_replace("/[^A-Za-z]/", "", $testString);
                if(strrev($testString) == $testString) {
                    echo "\"" . $originalString . "\" is a standard palindrome.<br />";
                }
                else {
                    echo "\"" . $originalString . "\" is not a palindrome.<br />";

                }
            }
        }
    ?>
</body>
</html>