<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function isBitten(){
            return rand(0,1) === 1;
        }

        if (isBitten()):
            echo "Charlie em va mossegar el dit!";
        else:
            echo "Charlie no em va mossegar el dit!";
        endif;
    

    ?>
</body>
</html>