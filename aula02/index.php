<?php

    $a = 10;
    $b = 5;

    $soma = $a + $b;
    echo "A soma é:" .$soma; 
    echo "<br>";
    echo "A variavel é:";

    var_dump($a);
    echo "<br>";
    echo "A variavel é:";
    var_dump($b);

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    if($a > $b){
        echo "A varivale A é maior que a B";
    }else{
        echo "A varivale B é maior que a A";
    }

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    if($a == $b){
        echo "A varivale A e B São iguais";
    }else{
        echo "A varivale A e B São diferentes";
    }

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    $nota1 = 5;
    $nota2 = 4;
    $nota3 = 6;

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if($media > 5 ){
        echo "Aprovado com a média:" .$media;
    }else if($media < 4 ){
        echo "Reprovado com a média:" .$media;
    }else{
        echo "Recuperaçãoc om a média:" .$media;
    }

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    $dia = 6;

    switch ($dia) {
        case '1':
            echo "Domingo";
            break;
        case '2':
             echo "Segunda";
        break;   
        case '3':
            echo "Terça";
            break;
        case '4':
             echo "Quarta";
        break; 
        case '5':
            echo "Quinta";
            break;
        case '6':
             echo "Sexta";
        break;    
        case '7':
            echo "Sabado";
       break;    
        
        default:
            echo "Insira um valor válido";
            break;
    }
    echo "<br>";
    echo "<hr>";
    echo "<br>";

//laços de repetição

for ($i=0; $i < 11 ; $i++) { 
    echo "$i - ";
}
echo "<br>";
echo "<hr>";
echo "<br>";

$a = 1;
while ($a <= 10) {
    echo "$a - ";
    $a++;

}
echo "<br>";
echo "<hr>";
echo "<br>";

$b = 1;

do {
    echo "$b - ";
    $b++;

} while ($b <= 10);
    
echo "<br>";
echo "<hr>";
echo "<br>";

    $nomes = ['Leonardo', 'Maya', 'Sophia', 'Nina'];
    foreach ($nomes as $nome) {
        echo "O nome é: $nome <br>";
    }
?>