<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <header>
        <a href='index.php'>Menu Principal</a>
        <a style="margin-left:24px;;" href='ex006.php'><-- Exercício Anterior</a>
        <a style="margin-left:24px;" href='ex008.php'>Próximo Exercício --></a>
    </header>
    <h1>Exercício 7</h1>
    <p>7.Crie um programa que a partir de um texto e uma palavra, fornecidos pelo usuário, realize uma busca no texto e exiba a posição inicial e final da palavra no texto. Exiba também a quantidade de letras e palavras contidas no texto. Por fim, crie um array para armazenar as letras que aparecem no texto e a quantidade de vezes que cada uma aparece.</p>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST["texto"];
        $palavra = $_POST["palavra"];

        $posicaoInicial = strpos($texto, $palavra);
        $posicaoFinal = $posicaoInicial + strlen($palavra) - 1;

        $quantidadeLetras = strlen($texto);
        $quantidadePalavras = str_word_count($texto);

        $letrasContagem = [];

        foreach (str_split($texto) as $letra) {
            $letra = strtolower($letra);
            if (ctype_alpha($letra)) {
                if (isset($letrasContagem[$letra])) {
                    $letrasContagem[$letra]++;
                } else {
                    $letrasContagem[$letra] = 1;
                }
            }
        }

        echo "<h2>Resultados:</h2>";
        echo "Posição inicial da palavra \"$palavra\" no texto: $posicaoInicial<br>";
        echo "Posição final da palavra \"$palavra\" no texto: $posicaoFinal<br>";
        echo "Quantidade de letras no texto: $quantidadeLetras<br>";
        echo "Quantidade de palavras no texto: $quantidadePalavras<br>";

        echo "<h3>Contagem de letras:</h3>";
        foreach ($letrasContagem as $letra => $contagem) {
            echo "$letra: $contagem<br>";
        }
    }
    ?>

    <h2>Informe o texto e a palavra:</h2>
    <form method="post">
        Texto: <textarea name="texto" rows="4" cols="50" required></textarea><br>
        Palavra: <input type="text" name="palavra" required><br><br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>