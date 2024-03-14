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
        <a href='index.php'>Menu Principal</a>
        <a style="margin-left:24px;" href='ex002.php'>Próximo Exercício --></a>
    </header>
    <h1>Exercício 1</h1>
    <p>1.Apresentar os quadrados dos números inteiros de 15 a 200. (utilize while)</p>
    <?php 
        $numero = 15;
        while($numero < 200 + 1) {
            $quadrado = $numero * $numero;
            echo 'O quadrado de '.$numero." é ",$quadrado."<br>";
            $numero++;
        }
    ?>
</body>
</html>