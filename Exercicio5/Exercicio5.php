<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $nota;
        $notaEstudiant = 65;

        function verificaGrau ($nota){
            if ($nota == 100 || $nota >= 60):
                echo "Primera Divisió";

            elseif($nota <= 59 || $nota >=45):
                echo "Segona Divisió";

            elseif($nota <= 44 || $nota >= 33):
                echo "Tercera Divisó";

            else:
                echo "L'estudiant reprovarà";
            endif;
        }

        echo verificaGrau($notaEstudiant);

    ?>
</body>
</html>