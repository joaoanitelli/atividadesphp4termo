<?php
    error_reporting(0);
    ini_set("display_errors", 0);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex009.php"><p><-- Último exercício</p></a>
        <a href="ex011.php"><p>Próximo exercício --></p></a>
    </div>
    <br><br>
    <p><b>Exercício 10: </b>Ler um número inteiro e exibir uma mensagem indicando se o número é par ou ímpar, e se é positivo ou negativo.</p>
    <br><br>
    <form method="post">
        <label for="numero">Insira um número inteiro: </label>
        <input type="number" name="numero" id="numero" placeholder="Ex: 10" required>
        <input type="submit" value="ENVIAR">
    </form>
    <br><br>
    <p><?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero = $_POST['numero'];
        $numero = $numero < 0? $numero * -1 : $numero;
        if($numero == 0){
            echo " ";
        }
        elseif($numero % 2 == 0) {
            echo "O número ",$numero," é par.";
        }elseif($numero % 2 == 1) {
            echo"O número ",$numero," é ímpar.";
        }
    }
?> </p>
    <br>
    <p>
        <?php 
        if($numero > 0){
            echo "O número é positivo";
        }elseif ($numero < 0) {
            echo "O número é negativo";
        }else {
            echo $numero," é um número neutro.";
        }
        ?>
    </p>
</body>
</html>