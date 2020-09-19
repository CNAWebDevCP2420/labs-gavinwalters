<!-- Excercise 2-4 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "utf-8">
    <title>Gas Prices</title>
</head>
<body>
    <?php
        $GasPrice = 2.57;
        if ($GasPrice >= 2 && $GasPrice <= 3) {
            echo "<p>Gas prices are between $2.00 and $3.00.</p>";
        }
        else {
            echo "<p>Gas prices are not between $2.00 and $3.00.</p>";
        }
    ?>
</body>
</html>