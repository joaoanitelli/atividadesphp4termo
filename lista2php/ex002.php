<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <header>
        <a href='index.php'>Menu Principal</a>
        <a style="margin-left:24px;;" href='ex001.php'><-- Exercício Anterior</a>
        <a style="margin-left:24px;" href='ex003.php'>Próximo Exercício --></a>
    </header>
    <h1>Exercício 2</h1>
    <p>2.Apresentar o total da soma obtida dos 100 primeiros números inteiros. (utilize do..while)</p>
    <?php 
        $total = 0;
        for($numero = 1; $numero <= 100; $numero++){
            $total += $numero;
        }
        echo "O total da soma dos 100 primeiros números inteiros é: ",$total;
    ?>
</body>
</html>