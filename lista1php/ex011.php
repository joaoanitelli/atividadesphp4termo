<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex010.php"><p><-- Último exercício</p></a>
        <a href="ex012.php"><p>Próximo exercício --></p></a>
    </div>
    <br><br>
    <p><b>Exercício 11: </b>Dada a idade de um nadador classifique-o em uma das seguintes categorias:<br>- Infantil A = 5 a 7 anos<br>- Infantil B = 8 a 11 anos<br>- Juvenil A = 12 a 13 anos<br>- Juvenil B = 14 a 17 anos<br>- Adultos = Maiores de 18 anos</p>
    <br><br>
    <form method="post">
        <label for="idade">Insira a idade do nadador: </label>
        <input type="text" name="idade" id="idade" placeholder="Ex: 10 anos" required>
        <input type="submit" value="ENVIAR">
    </form>
    <br>
    <p>
        <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $idade = $_POST['idade'];
            if($idade < 0) {
                echo "Insira um número válido";
            }elseif($idade < 5){
                echo "Ainda não está apto para ser um nadador";
            }elseif($idade <= 7) {
                echo "A idade de ",$idade," anos pertence a categoria Infantil A";
            }elseif($idade <= 11) {
                echo "A idade de ",$idade," anos pertence a categoria Infantil B";
            }elseif($idade <= 13) {
                echo "A idade de ",$idade," anos pertence a categoria Juvenil A";
            }elseif($idade <= 17) {
                echo "A idade de ",$idade," anos pertence a categoria Juvenil B";
            }elseif($idade >= 18) {
                echo "A idade de ",$idade," anos pertence a categoria dos Adultos";
            }else {
                echo "Insira um número válido";
            }
        }
        ?>
    </p>
</body>
</html>