<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $X = 3;
        $Y = 6;
        $M = 1.25;
        $N = 2.68;
        $suma = $X+$Y+$M+$N;
        $producte = $X*$Y*$M*$N;

        print "El valor de X es " . $X . "<br>";
        print "El valor de Y es " . $Y . "<br>";
        print "El valor de M es " . $M . "<br>";
        print "El valor de N es " . $N . "<br>";

        echo "La suma de X i Y es " . ($X + $Y) . "<br>";
        echo "La resta de X i Y es " . ($X - $Y) . "<br>";
        echo "El producte de X i Y es " . ($X * $Y) . "<br>";
        echo "La divisió de X i Y es " . ($X / $Y) . "<br>";
        echo "El mòdul de X i Y es " . ($X % $Y) . "<br>";


        function calcularDoble($xifra){
            return $xifra * 2;
        }
        echo "El doble de X es " . calcularDoble($X) . "<br>";
        echo "El doble de Y es " . calcularDoble($Y) . "<br>";
        echo "El doble de M es " . calcularDoble($M) . "<br>";
        echo "El doble de N es " . calcularDoble($N) . "<br>";

        print "El total suma de les xifers es " . $suma . "<br>";
        print "El total producte de les xifers es " . $producte . "<br>";




    ?>
</body>
</html>