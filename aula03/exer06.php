<?php      
    function gerar_numero(){
        $num = rand(1,100);
        echo "Número sorteado: $num <br>";
    }

    for ($i=0; $i < 10; $i++) { 
        gerar_numero();
    }
?>