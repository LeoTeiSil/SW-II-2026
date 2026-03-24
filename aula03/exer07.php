<?php
    function fatorial($x){
        for ($i= $x; $i > 1; $i--) { 
            $num *= $i;
            echo "A fatorail de $x é $num";
        }
    }

    fatorial(2);

?>