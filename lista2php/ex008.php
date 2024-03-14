<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <header>
        <a href='index.php'>Menu Principal</a>
        <a style="margin-left:24px;;" href='ex007.php'><-- Exercício Anterior</a>
    </header>
    <h1>Exercício 8</h1>
    <p>8.Crie um programa que armazene em um array 10 jogos da megasena, com 6 números inteiros cada (de 1 a 60) e em seguida crie um método que sorteie 6 dezenas e exiba a quantidade de acertos de cada jogo.</p>
<?php
function gerarJogoMegaSena() {
    $jogo = [];
    
    while (count($jogo) < 6) {
        $numero = rand(1, 60);
        if (!in_array($numero, $jogo)) {
            $jogo[] = $numero;
        }
    }
    
    return $jogo;
}

$jogosMegaSena = [];
for ($i = 0; $i < 10; $i++) {
    $jogosMegaSena[] = gerarJogoMegaSena();
}

$dezenasVencedoras = gerarJogoMegaSena();

foreach ($jogosMegaSena as $indice => $jogo) {
    $acertos = count(array_intersect($jogo, $dezenasVencedoras));
    echo "Jogo " . ($indice + 1) . ": ";
    echo implode(", ", $jogo) . " | ";
    echo "Acertos: $acertos<br>";
}

echo "Dezenas vencedoras: " . implode(", ", $dezenasVencedoras) . "<br>";
?>
</body>
</html>