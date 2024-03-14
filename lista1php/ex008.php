<?php
    error_reporting(0);
    ini_set("display_errors", 0);
?>

<?php 
    $totalprestacao = 0;
    $prestacoespagas = 0;
    $valorprestacoes = 0;
    $faltaprestacao = 0;
    $devedor = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalprestacao = $_POST['totalprestacao'];
        $prestacoespagas = $_POST['prestacoespagas'];
        $valorprestacoes = $_POST['valorprestacoes'];
        $faltaprestacao = $totalprestacao - $prestacoespagas;
        $devedor = $valorprestacoes * $faltaprestacao;
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex007.php"><p><-- Último exercício</p></a>
        <a href="ex009.php"><p>Próximo exercício --></p></a>
    </div>
    <br><br>
    <p><b>Exercício 8: </b>Faça um programa que leia o número total de prestações de um consórcio, o total de prestações pagas e o valor atual da prestação. O programa deve calcular e apresentar o saldo devedor atual e a quantidade de prestações sem pagar.</p>
    <br><br>
    <form method="post">
        <label for="totalprestacao">Insira o número total de prestações do seu consórcio: </label>
        <input type="text" name="totalprestacao" id="totalprestacao" placeholder="Ex: 60" required>
        <br><br>
        <label for="prestacoespagas">Quantas prestações já foram pagas?: </label>
        <input type="text" name="prestacoespagas" id="prestacoespagas" placeholder="Ex: 10" required>
        <br><br>
        <label for="valorprestacoes">Qual o valor atual das prestações?: </label>
        <input type="text" name="valorprestacoes" id="valorprestacoes" placeholder="R$ 600,00" required>
        <br><br>
        <input type="submit" value="ENVIAR">
    </form>
    <br>
    <p>O saldo devedor é de: R$<?php echo $devedor ?> e restam <?php echo $faltaprestacao ?> meses para terminar o consórcio.</p>
</body>
</html>