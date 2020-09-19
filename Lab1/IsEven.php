<!-- Excercise 1-6 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Is Even</title>
</head>

<body>
<p>
    <?php

        $testVariable = 8452;

        if (is_numeric($testVariable) === TRUE) {
            echo $testVariable . " is numeric. <br>";
                $testVariable = round($testVariable);
                if($testVariable % 2 === 0) {
                    echo $testVariable . " is even. <br>";
                }
                else {
                    echo $testVariable . "is not even. <br>";
                }
        }

    ?>
</p>
</body>
</html>