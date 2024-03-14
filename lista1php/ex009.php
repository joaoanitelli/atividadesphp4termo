<?php
    $ladoA = 0;
    $ladoB = 0;
    $ladoC = 0;
    $tipoTriangulo = "";

    function tipoTriangulo($ladoA, $ladoB, $ladoC) : string {
        $triangulo = $ladoA + $ladoB > $ladoC && $ladoA + $ladoC > $ladoB && $ladoB + $ladoC > $ladoA;

        if (!$triangulo) {
            return "Os lados inseridos não formam um triângulo.";
        }

        $trianguloIsosceles = 
            ($ladoA === $ladoB and $ladoA !== $ladoC and $ladoB !== $ladoC) || 
            ($ladoA === $ladoC and $ladoA !== $ladoB and $ladoC !== $ladoB) ||
            ($ladoB === $ladoC and $ladoB !== $ladoA and $ladoC !== $ladoA);
        
        if ($trianguloIsosceles) {
            return "É um triângulo isósceles.";
        }

        $trianguloEquilatero = $ladoA === $ladoB and $ladoA === $ladoC and $ladoB === $ladoC;

        if ($trianguloEquilatero) {
            return "É um triângulo equilátero.";
        }

        return "É um triângulo escaleno";
    }

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $ladoA = $_POST["ladoA"] ?? 0;
        $ladoB = $_POST["ladoB"] ?? 0;
        $ladoC = $_POST["ladoC"] ?? 0;

        $tipoTriangulo = tipoTriangulo($ladoA,$ladoB,$ladoC);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex008.php"><p><-- Último exercício</p></a>
        <a href="ex010.php"><p>Próximo exercício --></p></a>
    </div>
    <br><br>
    <p><b>Exercício 9: </b>Ler 3 valores para os lados de um triângulo, considerando lados como A, B, e C. Verificar se os valores dos lados fornecidos formam realmente um triângulo e, se for esta condição verdadeira, indicar qual o tipo de triângulo foi formado: isósceles, escaleno ou equilátero, caso os lados fornecidos não caracterizem um triângulo, avisar a ocorrência. Sabendo que:<br>- Triângulo é uma forma geométrica composta de 3 lados, sendo que cada lado é menor que a soma dos outros dois lados;<br>- Um triângulo é isósceles quando possui dois lados iguais e um diferente;<br>- um triângulo é equilátero quando possui todos os lados iguais;<br>- um triângulo é escaleno quando possui todos os lados diferentes.</p>
    <br><br>
    <form method="post">
        <label>Lado A:</label>
        <input type="number" name="ladoA" value="<?php echo $ladoA ?>" id="ladoA"/><br><br>
        <label>Lado B:</label>
        <input type="number" name="ladoB" value="<?php echo $ladoB ?>" id="ladoB"/><br><br>
        <label>Lado C:</label>
        <input type="number" name="ladoC" value="<?php echo $ladoC ?>" id="ladoC"/><br><br>
        <button>ENVIAR</button>
        <h4>Tipo de triângulo que foi formado: <?php echo $tipoTriangulo; ?></h5>
    </form>
    
</body>
</html>