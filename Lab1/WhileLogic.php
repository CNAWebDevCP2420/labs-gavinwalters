<!-- Excercise 2-3 -->
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <title>While Logic</title>
</head>
<body>
    <?php
        $Count = 1;
        while ($Count <= 100) {
            $Numbers[] = $Count;
            ++$Count;
        }
        foreach ($Numbers as $CurNum) {
            echo "<p>$CurNum</p>";
        }
    ?>
</body>
</html>