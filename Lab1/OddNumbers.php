<!-- Excercise 2-2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Odd Numbers</title>
</head>
<body>
    <?php  
        $i = 0;
        while ($i < 100) {
            if($i %2 !== 0) {
                echo $i . "<br>";
            }
            ++$i;
        }
    ?>
</body>
</html>