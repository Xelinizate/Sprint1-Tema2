
<?php

        function isBitten(){
    
            
            $charlie = (rand()&1) ? "Charlie em va mossegar el dit!" : "Charlie no em va mossegar el dit!";
            $resposta = ($charlie) ? TRUE : FALSE;

            return $resposta;
        }
        
    

?>

