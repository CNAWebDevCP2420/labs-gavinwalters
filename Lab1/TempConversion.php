<!-- Excercise 2-6 -->
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <title>Temperature Conversion</title>
</head>
<body>
    <?php
    $Farenheit = 0;
    while($Farenheit <= 100) {
        $Celcius = ($Farenheit - 32) * (5 / 9);
        echo $Farenheit . "&deg; Farenheit equals: " . round($Celcius, 1) . "&deg; Celcius.<br>";
        ++$Farenheit;
     }
     ?>
</body>
</html>