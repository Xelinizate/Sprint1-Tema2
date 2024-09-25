<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $num1;
        $num2;
        $resultat;
        $operador;

        function calculadora($num1, $num2, $operador){
            switch ($operador){
                case '+':
                    return $num1 + $num2;
                case '-':
                    return $num1 - $num2;
                case '*':
                    return $num1 * $num2;
                case '/':
                    if($num2 != 0){
                        return $num1 / $num2;
                    } else {
                        return "No divisible.";
                    }
                    default:
                    return "Operació no válida.";
            }
            
        }

        echo calculadora(8,5, '+') . "<br>";
        echo calculadora(4,7,'*') . "<br>";
        echo calculadora(120,89,'-') . "<br>";
        echo calculadora(56,8,'/') . "<br>";
        

        


        

    ?>
</body>
</html>