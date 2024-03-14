<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <header>
        <a href="index.php" style="margin-right:24px">Menu Principal</a>
        <a href="ex002.php">Próximo Exercício --></a>
        <h1>Exercício 1</h1>
        <p>1.Crie  um programa  em  PHP  que  gere  um  arquivo  com  o  seu  nome  e  a  extensão  “.txt”, abra-o e guarde 03 frases nele. Depois crie um script que imprima o conteúdo gravado nesse arquivo.</p>
    </header>
<?php
$nome_arquivo = "joao.txt";
$frases = [
    'Frase1',
    'Frase2',
    'Frase3'
];

$arquivo = fopen($nome_arquivo, "w");

foreach ($frases as $frase) {
    fwrite($arquivo, $frase . PHP_EOL);
}

$arquivo = fopen($nome_arquivo, "r");

if ($arquivo) {
    while (($linha = fgets($arquivo)) !== false) {
        echo $linha.'<br>';
    }

    fclose($arquivo);
} else {
    echo "Erro ao abrir o arquivo.";
}
?>
</body>
</html>