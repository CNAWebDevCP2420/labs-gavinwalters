<!--Excercise 3-3-->
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <title>Calidate Local Address</title>
</head>
<body>
    <h1>Validate Local Address</h1><hr />
    <?php
        $email = array("jsmith123@example.org", "john.smith.mail@example.org", "john.smith@example.org", "john.smith@example", "jsmith123@mail.example.org");

        foreach ($email as $emailAddress) {
            echo "The email address &ldquo;" . $emailAddress . "&rdquo; ";
            if (preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $emailAddress)==1)
                echo " is a valid email address. ";
            else
                echo " is not a valid email address. ";
        }
    ?>
</body>
</html>