<?php
function fatorial($x) {
    $resultado = 1;

    for ($i = $x; $i > 1; $i--) {
        $resultado *= $i;
    }

    echo "O fatorial de $x é $resultado";
}

fatorial(10);
?>