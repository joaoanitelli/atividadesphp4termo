<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex004.php"><p><-- Último exercício</p></a>
        <a href="ex006.php"><p>Próximo exercício --></p></a>
    </div>
    <br><br>
    <p><b>Exercício 5: </b>Desenvolva um programa que receba quatro notas de um aluno, calcule e imprima a média aritmética das notas e a mensagem de aprovado para média superior ou igual a 7.0 ou a mensagem de reprovado para média inferior a 7.0. </p>
    <br><br>
    <form method="post">
        <label for="nota1">Insira a nota do 1º Bimestre: </label>
        <input type="text" name="nota1" id="nota1" placeholder="Ex: 8" required><br><br>
        <label for="nota2">Insira a nota do 2º Bimestre: </label>
        <input type="text" name="nota2" id="nota2" placeholder="Ex: 8" required><br><br>
        <label for="nota3">Insira a nota do 3º Bimestre: </label>
        <input type="text" name="nota3" id="nota3" placeholder="Ex: 8" required><br><br>
        <label for="nota4">Insira a nota do 4º Bimestre: </label>
        <input type="text" name="nota4" id="nota4" placeholder="Ex: 8" required><br><br>
        <input type="submit" value="ENVIAR">
    </form>
    <br>
    <p>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];
            $soma = $nota1 + $nota2 + $nota3 + $nota4;
            $resultado = $soma / 4;
            if ($resultado >= 7) {
                echo "Parabens! Você tirou a nota ",$resultado," e foi aprovado.";
            } else {
                echo "Que pena! Você tirou a nota ",$resultado," e foi reprovado.";
            }
        }
    ?>
    </p>
</body>
</html>