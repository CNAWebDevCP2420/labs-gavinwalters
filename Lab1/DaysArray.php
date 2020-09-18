<!-- Excercise 1-4 -->
<!DOCTYPE html>
<html lang ="en">
<head>
<title>Days Array</title>
</head>
<body>
<?php
    //assign days to array named $Days[]
    $Days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    //output "The days of the week in English are"
    echo "The days of the week in English are: ";
    for ($i = 0; $i < 6; $i++)
    printf("%s,\n", $Days[$i]);
    echo "$Days[6]" . ".<br>";

    //reassign days to french
    $Days = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    //output "The days of the week in French are"
    echo "The days of the week in French are: ";
    for ($i = 0; $i < 6; $i++)
    printf("%s,\n", $Days[$i]);
    echo "$Days[6]" . ".<br>";
?>
</body>
</html>