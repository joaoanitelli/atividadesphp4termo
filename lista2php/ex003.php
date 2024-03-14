<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <header>
        <a href='index.php'>Menu Principal</a>
        <a style="margin-left:24px;;" href='ex002.php'><-- Exercício Anterior</a>
        <a style="margin-left:24px;" href='ex004.php'>Próximo Exercício --></a>
    </header>
    <h1>Exercício 3</h1>
    <p>3.Escreva um programa que apresente a série de Fibonacci até o vigésimo quinto termo. A série de Fibonacci é formada pela sequência: 1, 1, 2, 3, 5, 8, 13, 21, 34, ... . Esta série se caracteriza pela soma de um termo atual com o seu anterior subsequente, para que seja formado o próximo valor da sequência. (utilize for)</p>
    <?php
    $termo1 = 1;
    $termo2 = 1;
    
    echo "$termo1<br>";
    echo "$termo2<br>";
    
    for ($i = 3; $i <= 25; $i++) {
        $proximoTermo = $termo1 + $termo2;
        echo "$proximoTermo<br>";
        $termo1 = $termo2;
        $termo2 = $proximoTermo;
    }
    
    ?>
</body>
</html>