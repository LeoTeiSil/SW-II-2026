<?php      
    function mostrar_array($vetor){
        foreach ($vetor as $valor) {
            echo $valor . "<hr>";
        }
    }

    $numeros = [1,2,3,4,5];
    $numeros2 = [10,20,30,40,50];
    $nome = ["Leonardo", "Gustavo", "Isabella"];

    mostrar_array($numeros);
    mostrar_array($numeros2);
    mostrar_array($nome);
?>