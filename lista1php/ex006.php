<?php
    error_reporting(0);
    ini_set("display_errors", 0);
?>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $kminicial = $_POST['kminicial'];
        $kmfinal = $_POST['kmfinal'];
        $consumo = $_POST['consumo'];
        $preco = $_POST['preco'];
        $kmtotal = $kmfinal - $kminicial;
        $valorgasto = $consumo * $preco;
        $valorlitro = $kmtotal / $consumo;
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex005.php"><p><-- Último exercício</p></a>
        <a href="ex007.php"><p>Próximo exercício --></p></a>
    </div>
    <br><br>
    <p><b>Exercício 6: </b>Dadas as seguintes entradas: quilometragem inicial, quilometragem final, litros consumidos, preço do litro de combustível. Faça um programa que imprima o seguinte relatório: distância percorrida, valor total gasto e o consumo do carro (quantos quilômetros percorre com 1 litro de combustível).</p>
    <br><br>
    <form method="post">
        <label for="kminicial">Insira a quilometragem inicial: </label><input type="text" name="kminicial" id="kminicial" placeholder="Ex: 2800 km" required><br><br>
        <label for="kmfinal">Insira a quilometragem final: </label><input type="text" name="kmfinal" id="kmfinal" placeholder="Ex: 3500 km." required><br><br>
        <label for="consumo">Insira quantos litros foram consumidos: </label><input type="text" name="consumo" id="consumo" placeholder="Ex: 68 L." required><br><br>
        <label for="preco">Insira o preço do litro de combustível: </label><input type="text" name="preco" id="preco" placeholder="R$ 5,65" required><br><br>
        <input type="submit" value="ENVIAR">
    </form>
    <p>Você percorreu <?php echo $kmtotal ?> kilometros e gastou <?php echo "R$ ",$valorgasto ?>. Seu carro faz <?php echo $valorlitro ?> km por litro de combustível.</p>
</body>
</html>