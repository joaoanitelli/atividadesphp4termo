<?php
    error_reporting(0);
    ini_set("display_errors", 0);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex011.php"><p><-- Último exercício</p></a>
        <a href="ex013.php"><p>Próximo exercício --></p></a>
    </div>
    <br><br>
    <p><b>Exercício 12: </b>Ler o nome de um aluno e quatro valores referentes as suas notas bimestrais, calcular a média aritmética, e exibir uma mensagem informando se o aluno foi aprovado se o valor da média escolar for maior ou igual 7. Se o valor da média for menor que 7, solicitar a nota de exame e recalcular a média. Se a nova média for maior ou igual a 5, exibir uma mensagem informando que o aluno foi aprovado em exame. Se o aluno não for aprovado informar essa condição. Apresentar com as mensagens o nome do aluno e o valor da média, para qualquer condição.</p>
    <br><br>
    <form method="post">
        <label for="nome">Insira o seu nome: </label>
        <input type="text" name="nome" id="nome" placeholder="João" required>
        <br>
        <label for="sobrenome">Insira o seu sobrenome: </label>
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Artero" required>
        <br><br>
        <label for="nota1">Insira a sua nota do 1º Bimestre: </label>
        <input type="text" name="nota1" id="nota1" placeholder="Ex: 10" required>
        <br>
        <label for="nota2">Insira a sua nota do 2º Bimestre: </label>
        <input type="text" name="nota2" id="nota2" placeholder="Ex: 10" required>
        <br>
        <label for="nota3">Insira a sua nota do 3º Bimestre: </label>
        <input type="text" name="nota3" id="nota3" placeholder="Ex: 10" required>
        <br>
        <label for="nota4">Insira a sua nota do 4º Bimestre: </label>
        <input type="text" name="nota4" id="nota4" placeholder="Ex: 10" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <p>
    <?php 
        $nome = 0;
        $sobrenome = 0;
        $nota1 = 0;
        $nota2 = 0;
        $nota3 = 0;
        $nota4 = 0;
        $media = 0;
        $nota_exame = null;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            if ($media < 7) {
                echo "Olá ",$nome," ",$sobrenome,"! ",$media," não é suficiente para ser aprovado. Solicitar exame";
                echo "<form method='post' action=''>";
                echo "Nota do exame: <input type='number' name='nota_exame'><br><br>";
                $nota_exame = $_POST['nota_exame'];
                echo "<input type='submit' value='ENVIAR'>";
                echo "</form>";
            }else {
                echo "Parabéns ",$nome," ",$sobrenome,"! Você está aprovado.";
            }
        }
    ?>
    </p>
    <p>
        <?php 
        if ($nota_exame != null){
            if($nota_exame < 7){
                echo "Lamento, sua nota nao foi o suficiente";
            }else{
                echo "Parabéns ",$nome," ",$sobrenome,"! Você está aprovado.";
            }
        }
        ?>
    </p>
</body>
</html>