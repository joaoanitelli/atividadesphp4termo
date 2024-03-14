<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex003.php"><p><-- Último exercício</p></a>
        <a href="ex005.php"><p>Próximo exercício --></p></a>
    </div>
    <br><br>
    <p><b>Exercício 4: </b>Desenvolva um programa que receba um valor digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. Imprima na tela: "Valor Positivo", "Valor Negativo", "Igual a Zero".</p>
    <br><br>
    <form method="post">
        <label for="valordigitado">Insira um número positivo ou negativo: </label>
        <input type="number" name="valordigitado" id="valordigitado" placeholder="Ex: 8, -2, 0..." required>
        <input type="submit" value="ENVIAR">
    </form>
    <p><b>O valor digitado: </b> 
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $valordigitado = $_POST['valordigitado'];
            if($valordigitado < 0){
                echo $valordigitado , " é Negativo";
            } else if($valordigitado == 0){
                echo $valordigitado , " é Igual a 0";
            } else {
                echo $valordigitado ," é Positivo";
            }
        }
        ?>
    </p>
</body>
</html>