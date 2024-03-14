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
        <a href="index.php" style="margin-right:24px">Menu Principal</a>
        <a href="ex001.php" style="margin-right:24px"><-- Exercício anterior</a>
        <a href="ex003.php">Próximo Exercício --></a>
        <h1>Exercício 2</h1>
        <p>2.Crie  um  documento  HTML  que  permita  ao  usuário  digitar  cinco  nomes  de  times  de  futebol.   Faça   um   script   PHP   com   uma   função   que   receba   os   nomes   dos   times   submetidos a partir do documento HTML anterior e salve-os em um arquivo “times.txt”. O script deverá ser capaz de imprimir os nomes salvos no arquivo.</p>
    </header>
    <form method="POST">
        <input type="text" name="time1" placeholder="Time 1" required><br>
        <input type="text" name="time2" placeholder="Time 2" required><br>
        <input type="text" name="time3" placeholder="Time 3" required><br>
        <input type="text" name="time4" placeholder="Time 4" required><br>
        <input type="text" name="time5" placeholder="Time 5" required><br>
        <input type="submit" value="Salvar Times">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomes_times = array(
        $_POST["time1"],
        $_POST["time2"],
        $_POST["time3"],
        $_POST["time4"],
        $_POST["time5"]
    );

    $arquivo = fopen("times.txt", "w");

    if ($arquivo) {
        foreach ($nomes_times as $nome) {
            fwrite($arquivo, $nome . "\n");
        }

        fclose($arquivo);

        $arquivo = fopen('times.txt', 'r');
        if ($arquivo) {
            echo "<h2>Nomes dos Times Salvos:</h2>";
            while (!feof($arquivo)) {
                $linha = fgets($arquivo);
                echo "$linha<br>";
            }
            fclose($arquivo);
    }

        echo "Nomes dos times salvos com sucesso!";
    } else {
        echo "Erro ao abrir o arquivo para escrita.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
</body>
</html>