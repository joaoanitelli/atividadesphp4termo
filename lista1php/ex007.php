<?php
    error_reporting(0);
    ini_set("display_errors", 0);
?>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $valornulo = $_POST['valornulo'];
        $valorvalido = $_POST['valorvalido'];
        $total = $valornulo + $valorvalido;
        $porcentagemnulo = ($valornulo / $total) * 100;
        $porcentagemvalido = ($valorvalido / $total) * 100;
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex006.php"><p><-- Último exercício</p></a>
        <a href="ex008.php"><p>Próximo exercício --></p></a>
    </div>
    <br><br>
    <p><b>Exercício 7: </b>Faça um programa para ler o número de votos brancos, nulos e válidos de uma eleição. Calcular e escrever o percentual que cada um representa em relação ao total de eleitores.</p>
    <br><br>
    <form method="post">
        <label for="valornulo">Quantas pessoas votaram Nulo/Branco: </label>
        <input type="text" name="valornulo" id="valornulo" placeholder="Ex: 100 pessoas" required>
        <br><br>
        <label for="valorvalido">Quantas pessoas votaram em um Candidato: </label>
        <input type="text" name="valorvalido" id="valorvalido" placeholder="Ex: 800 pessoas" required>
        <br>
        <input type="submit" value="ENVIAR">
    </form>
    <br>
    <p><?php echo number_format($porcentagemnulo,2) ?>% votaram nulo e <?php echo number_format($porcentagemvalido,2) ?>% votaram em algum candidato.</p>
</body>
</html>