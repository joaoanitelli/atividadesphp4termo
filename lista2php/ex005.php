<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <header>
        <a href='index.php'>Menu Principal</a>
        <a style="margin-left:24px;;" href='ex004.php'><-- Exercício Anterior</a>
        <a style="margin-left:24px;" href='ex006.php'>Próximo Exercício --></a>
    </header>
    <h1>Exercício 5</h1>
    <p>5.Criar um array com 50 números inteiros, exibi-lo em ordem crescente e exibir a quantidade de números pares e de números primos.</p>
    <?php
// Função para verificar se um número é primo
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    if ($num <= 3) {
        return true;
    }
    if ($num % 2 == 0 || $num % 3 == 0) {
        return false;
    }
    $i = 5;
    while ($i * $i <= $num) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    return true;
}

$numeroInteiro = [];
for ($i = 0; $i < 50; $i++) {
    $numeroInteiro[] = rand(1, 100);
}

sort($numeroInteiro);

echo "Array em ordem crescente: " . implode(", ", $numeroInteiro) . "<br>";

$numerosPares = 0;
$numerosPrimos = 0;

foreach ($numeroInteiro as $numero) {
    if ($numero % 2 == 0) {
        $numerosPares++;
    }
    if (isPrime($numero)) {
        $numerosPrimos++;
    }
}

echo "Quantidade de números pares: $numerosPares<br>";
echo "Quantidade de números primos: $numerosPrimos<br>";
?>
</body>
</html>