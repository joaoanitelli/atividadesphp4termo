<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <header>
        <a href='index.php'>Menu Principal</a>
        <a style="margin-left:24px;;" href='ex003.php'><-- Exercício Anterior</a>
        <a style="margin-left:24px;" href='ex005.php'>Próximo Exercício --></a>
    </header>
    <h1>Exercício 4</h1>
    <p>Escreva um programa que exiba as tabuadas de 1 a 100. A tabuada deve ser exibida no seguinte formato:<br><br>Tabuada do 2:<br>2 x 1 = 2<br>2 x 2 = 4<br>2 x 3 = 6<br>2 x 4 = 8<br>...<br> 2 x 10 = 20</p>
    <?php 
    for ($tabuada = 1; $tabuada <= 100; $tabuada++) {
        echo "Tabuada do $tabuada:<br>";
    
        for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
            $resultado = $tabuada * $multiplicador;
            echo "$tabuada x $multiplicador = $resultado<br>";
        }
    
        echo "<br>";
    }
    ?>
</body>
</html>