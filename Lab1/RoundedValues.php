<!-- Excercise 1-5 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Rounded Values</title>
</head>

<body>
<p>
<?php

    //Establish test variables
    $testNum1 = 8.3;
    $testNum2 = 8.7;
    $testNum3 = -8.3;
    $testNum4 = -8.7;
    echo "Take the numbers $testNum1, $testNum2, $testNum3, and $testNum4. <br>";

    //use round
    echo "The round() function will round these numbers to " . round($testNum1) . ", " . round($testNum2) . ", " . round($testNum3) . ", and " . round($testNum4) . ". <br>";

    //use ceil
    echo "The ceil() function will round these numbers to " . ceil($testNum1) . ", " . ceil($testNum2) . ", " . ceil($testNum3) . ", and  " . ceil($testNum4) . ". <br>";

    //use floor
    echo "The floor() fundtion will round these numbers to " . floor($testNum1) . ", " . floor($testNum2) . ", " . floor($testNum3) . ", and " . floor($testNum4) . ". <br>";


?>
</p>
</body>
</html>