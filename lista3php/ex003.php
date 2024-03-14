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
        <a href="index.php" style="margin-right:24px">Menu Principal</a>
        <a href="ex002.php" style="margin-right:24px"><-- Exercício anterior</a>
        <h1>Exercício 3</h1>
        <p>3.Crie  um  documento  HTML  que  permita  incluir  compromissos.  Os  campos  solicitados  devem  ser:  usuário,  compromisso,  local,  data  e  hora.  Os  compromissos  devem  ser  gravados  em  um  arquivo  no  formato  JSON  para  manipulação  dos  dados.  Crie  também  na mesma página uma tabela que liste os compromissos de um determinado usuário e permita excluir compromissos. </p>
    </header>
    <form action="" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required><br>
        <label for="compromisso">Compromisso:</label>
        <input type="text" id="compromisso" name="compromisso" required><br>
        <label for="local">Local:</label>
        <input type="text" id="local" name="local" required><br>
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required><br>
        <label for="hora">Hora:</label>
        <input type="time" id="hora" name="hora" required><br>
        <input type="submit" value="Adicionar Compromisso">
    </form>

    <?php
    function listarCompromissos($usuario, $compromissos) {
        echo "<h2>Compromissos de $usuario</h2>";

        echo "<table border='1'>";
        echo "<tr><th>Compromisso</th><th>Local</th><th>Data</th><th>Hora</th><th>Ação</th></tr>";

        foreach ($compromissos as $index => $compromisso) {
            if ($compromisso["usuario"] === $usuario) {
                echo "<tr>";
                echo "<td>{$compromisso["compromisso"]}</td>";
                echo "<td>{$compromisso["local"]}</td>";
                echo "<td>{$compromisso["data"]}</td>";
                echo "<td>{$compromisso["hora"]}</td>";
                echo "<td><a href='?excluir=$index'>Excluir</a></td>";
                echo "</tr>";
            }
        }

        echo "</table>";
    }

    function listarUsuários($compromissos) {
        echo "<h2>Usuários:</h2>";

        echo "<table border='1'>";
        echo "<tr><th>Nome</th><th>Compromissos</th></tr>";

        foreach ($compromissos as $index => $compromisso) {
            //if ($compromisso["usuario"] === $usuario) {
                echo "<tr>";
                echo "<td><a href='?usuario={$compromisso["usuario"]}'>{$compromisso["usuario"]}</a></td>";
                echo "<td>{$compromisso["compromisso"]}</td>";
                echo "</tr>";
   //         }
        }

        echo "</table>";
    }


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $usuario = $_POST["usuario"];
        $compromisso = $_POST["compromisso"];
        $local = $_POST["local"];
        $data = $_POST["data"];
        $hora = $_POST["hora"];

        $novoCompromisso = [
            "usuario" => $usuario,
            "compromisso" => $compromisso,
            "local" => $local,
            "data" => $data,
            "hora" => $hora
        ];

        $compromissos = [];
        if (file_exists("compromissos.json")) {
            $json = file_get_contents("compromissos.json");
            $compromissos = json_decode($json, true);
        }

        $compromissos[] = $novoCompromisso;

        $json = json_encode($compromissos, JSON_PRETTY_PRINT);
        file_put_contents("compromissos.json", $json);
    }

    $compromissos = [];
    if (file_exists("compromissos.json")) {
        $json = file_get_contents("compromissos.json");
        $compromissos = json_decode($json, true);
    }

    if (isset($_GET["excluir"])) {
        $index = $_GET["excluir"];
        if (isset($compromissos[$index])) {
            unset($compromissos[$index]);
            $json = json_encode(array_values($compromissos), JSON_PRETTY_PRINT);
            file_put_contents("compromissos.json", $json);
        }
    }

    if (isset($_GET["usuario"])) {
        listarCompromissos($_GET["usuario"], $compromissos);
    }


    if (isset($_GET["usuarios"])) {
        listarUsuários($compromissos);
    }
    ?>

</body>
</html>