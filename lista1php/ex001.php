<?php
    $troco = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $valordoproduto = $_POST['valordoproduto'];
        $valorpago = $_POST['valorpago'];
        $troco = $valorpago - $valordoproduto;
    }
    if ($troco < 0) {
        $devedor = $troco * (-1);
        $troco = 0;
    }else {
        $devedor = 0;
    }
?>

<?php
    error_reporting(0);
    ini_set("display_errors", 0);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troco</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex002.php"><p>Próximo exercício --></p></a>
    </div>
    <br><br>
    <p><b>Exercício 1: </b>Faça um programa que receba um valor pago, um segundo valor que é o preço do produto e retorne o troco a ser dado.</p><br><br>
    <form method="POST">
        <label for="valordoproduto">Insira o valor do produto:</label>
        <input type="text" name="valordoproduto" id="valordoproduto" placeholder="Ex: R$ 30.00" required><br><br>
        <label for="valorpago">Insira o valor pago pelo cliente: </label>
        <input type="number" name="valorpago" id="valorpago" placeholder="Ex: R$ 60.00" required> <br><br>
        <input type="submit" value="Enviar">
    </form><br><br>
    <div>
        <p>Resta pagar: R$ <?php echo $devedor ?></p>
        <p>Troco: R$ <?php echo $troco ?></p>
    </div>
</body>
</html>