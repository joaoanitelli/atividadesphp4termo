<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <header>
        <a href='index.php'>Menu Principal</a>
        <a style="margin-left:24px;;" href='ex005.php'><-- Exercício Anterior</a>
        <a style="margin-left:24px;" href='ex007.php'>Próximo Exercício --></a>
    </header>
    <h1>Exercício 6</h1>
    <p>6.Criar um array com um número x de número inteiros (fornecido pelo usuário), exibir a soma dos elementos do array, a média dos elementos, o menor e o maior elemento e a suas respectivas posições do array. </p>
    <?php
    function calcularMedia($array) {
        $soma = array_sum($array);
        $tamanho = count($array);
        return $soma / $tamanho;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tamanhoArray = $_POST["tamanho"];
        $arrayNumeros = [];

        for ($i = 0; $i < $tamanhoArray; $i++) {
            $numero = (int)$_POST["numero_$i"];
            $arrayNumeros[] = $numero;
        }

        $soma = array_sum($arrayNumeros);

        $media = calcularMedia($arrayNumeros);

        $menorElemento = min($arrayNumeros);
        $maiorElemento = max($arrayNumeros);
        $posicaoMenor = array_search($menorElemento, $arrayNumeros);
        $posicaoMaior = array_search($maiorElemento, $arrayNumeros);

        echo "<h2>Resultados:</h2>";
        echo "Array: " . implode(", ", $arrayNumeros) . "<br>";
        echo "Soma dos elementos: $soma<br>";
        echo "Média dos elementos: $media<br>";
        echo "Menor elemento: $menorElemento (Posição: $posicaoMenor)<br>";
        echo "Maior elemento: $maiorElemento (Posição: $posicaoMaior)<br>";
    }
    ?>

    <h2>Informe os números inteiros:</h2>
    <form method="post">
        Tamanho do array: <input type="number" name="tamanho" required><br><br>

        <?php
        if (isset($tamanhoArray)) {
            for ($i = 0; $i < $tamanhoArray; $i++) {
                echo "Número $i: <input type=\"number\" name=\"numero_$i\" required><br>";
            }
            echo "<br><input type=\"submit\" value=\"Calcular\">";
        }
        ?>
    </form>
</body>
</html>