<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>receber dados</title>
</head>
<body>
    <?php
    // $nome = $_POST['nome'];
    $nome = htmlspecialchars($_POST['nome']);
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $anoAtual = date("Y");
    $ano = $anoAtual - $idade;

    if($idade >= 18){
        echo "<p style='color: blue;'>maior de idade.</p>";
    }else{
        echo "<p style='color: red;'>menor de idade</p>";
    }
    ?>
    <p>O nome é <?php echo $nome ?></p>
    <p>Sua idade é <?php echo $idade ?></p>
    <p>Seu email é <?php echo $email ?></p>
    <p>Você nasceu em <?php echo $ano ?></p>

    

</body>
</html>