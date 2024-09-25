<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $saludar = "Hello, World!";
        $curs = "Aquest és el curs de PHP";

        print (strtoupper($saludar)) . "<br>";
        print (strlen($saludar)) . "<br>";
        print (strrev($saludar)) . "<br>";


        print $saludar . " " . $curs;

    ?>
</body>
</html>