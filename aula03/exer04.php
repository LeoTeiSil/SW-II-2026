<?php
    function tabuada($x){
        for ($i=0; $i < 11; $i++) { 
            $resul = $x * $i;
            echo "$x x $i = $resul <br>";
        }
    }

    tabuada(2);

?>