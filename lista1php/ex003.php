<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex002.php"><p><-- Último exercício</p></a>
        <a href="ex004.php"><p>Próximo exercício --></p></a>
    </div>
    <br><br>
    <p><b>Exercício 3: </b>Desenvolva um programa que receba um valor digitado pelo usuário e imprima o texto "o valor é maior que 10" caso isso seja verdade, senão imprima "o valor é menor que 10".</p>
    <br><br>
    <form method="POST">
        <label for="valor">Insira um número</label>
        <input type="number" name="valordigitado" id="valor" placeholder="Ex: 8" required>
        <input type="submit" value="ENVIAR">
    </form>
    <br>
<p> Número digitado:  
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $valordigitado = $_POST['valordigitado'];
    $frasemaior = " é maior que 10";
    $fraseigual = " é igual a 10";
    $frasemenor = " é menor que 10";
    if ($valordigitado > 10) {
        echo $valordigitado , $frasemaior;
    } elseif ($valordigitado == 10) {
        echo $valordigitado , $fraseigual;
    } else {
        echo $valordigitado , $frasemenor;
    }
} 
?>
</p>

</body>
</html>