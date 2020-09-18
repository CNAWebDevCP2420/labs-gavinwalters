<!-- Excercise 1-1 -->
<!DOCTYPE html>
<html lang ="en">
<head>
<title>Interest Array</title>
</head>
<body>
<?php
    $InterestRate1 = .0725;
    $InterestRate2 = .0750;
    $InterestRate3 = .0775;
    $InterestRate4 = .0800;
    $InterestRate5 = .0825;
    $InterestRate6 = .0850;
    $InterestRate7 = .0875;

    $RatesArray = array($InterestRate1, $InterestRate2, $InterestRate3, $InterestRate4, $InterestRate5, $InterestRate6, $InterestRate7);
    for ($i = 0; $i < 7; $i++)
        printf("Interest Rate %3d = %8.4lf<br>\n", $i +1, $RatesArray[$i]);
?>
</body>
</html>