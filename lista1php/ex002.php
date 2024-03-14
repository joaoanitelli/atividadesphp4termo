<?php
    $valorkg = 0;
    $pesokg = 0;
    $resultado = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorkg = $_POST['valorkg'];
        $pesokg = $_POST['pesokg'];
        $resultado = $valorkg * $pesokg;
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex001.php"><p><-- Último exercício</p></a>
        <a href="ex003.php"><p>Próximo exercício --></p></a>
    </div>
    <br><br>
    <p><b>Exercício 2: </b>Faça um programa que receba o valor do quilo de um produto e a quantidade de quilos do produto consumida, calculando o valor final a ser pago.</p>
    <br><br>
    <form method="POST">
        <label for="valorkg">Insira o valor do Kilo de um produto: </label>
        <input type="number" name="valorkg" id="valorkg" placeholder="Ex: R$ 40.00" step=".01" required><br><br>
        <label for="pesokg">Quantos Kilos foram consumidos?: </label>
        <input type="number" name="pesokg" id="pesokg"placeholder="Ex: 2 kgs" step=".01" required><br><br>
        <input type="submit" value="ENVIAR">
    </form><br><br>
    <div>
        <p>Você consumiu <?php echo $pesokg ?> kgs. e terá de pagar R$ <b><?php echo $resultado ?></b>.</p>
    </div>
</body>
</html>