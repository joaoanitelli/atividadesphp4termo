<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
    <!-- Estilização -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
    .calcular {
        background-color:red;
        color:white;
        font-weight:bold;
        padding:5px;
        border-radius:10px;
        border:none;
        margin:15px
    }
    
    .reset {
        background-color:blue;
        color:white;
        font-weight:bold;
        padding:5px;
        border-radius:10px;
        border:none;
        margin:15px
    }
</style>
<body>
    <div class="menu">
        <a href="index.php"><p>Menu principal</p></a>
        <a href="ex012.php"><p><-- Último exercício</p></a>
    </div>
    <br><br>
    <p><b>Exercício 13: </b>Crie uma página em HTML com Bootstrap e PHP que calcule o IMC de uma pessoa. O formulário deve solicitar o peso e a altura da pessoa e calcular o valor do IMC. O resultado encontrado deve ser comparado com a tabela de IMCs e apresentar a situação que a pessoa se encontra. O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.</p>
    <br><br>
    <hr>
    <main>
        <h1>Cálculo IMC</h1>
        <p style="font-size:16px;">IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o peso ideal de cada pessoa.</p>
        <p style="font-size:16px;">O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.</p>
        <p style="font-size:16px;">Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela. Importante: siga os exemplos e use pontos como separadores.</p>
        <form method="post">
            <div>
                <small>Altura (ex.: 1.70)</small>
                <input type="text" name="altura" placeholder="Metros" required>
            <div>
                <small>Peso (ex.: 69.2)</small>
                <input type="text" name="peso" placeholder="Quilos" required>
            </div>
            <br>
            <div>
                <input class="calcular" type="submit" value="Calcular >">
                <input class="reset" type="reset" value="Limpar >">
            </div>
        </form>
        <br>
        <p>
            <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $altura = $_POST['altura'];
                $peso = $_POST['peso'];
                $imc = $peso / ($altura **2);
                if($imc < 18.5) {
                    echo "SEU IMC: <b>",$imc,"</b> é menor que <b>18,5.</b> Sua classificação é: <b>Magreza</b> com o grau de obesidade: <b>0</b>";
                }elseif ($imc < 24.9) {
                    echo "SEU IMC: <b>",$imc,"</b> é entre <b>18,5 e 24,9.</b> Sua classificação é: <b>Normal</b> com o grau de obesidade: <b>0</b>";
                }elseif ($imc < 29.9) {
                    echo "SEU IMC: <b>",$imc,"</b> é entre <b>25 e 29,9.</b> Sua classificação é: <b>Sobrepeso</b> com o grau de obesidade: <b>I</b>";
                }elseif ($imc < 39.9) {
                    echo "SEU IMC: <b>",$imc,"</b> é entre <b>30 e 39,9.</b> Sua classificação é: <b>Obesidade</b> com o grau de obesidade: <b>II</b>";
                }elseif ($imc > 40) {
                    echo "SEU IMC: <b>",$imc,"</b> é maior que <b>40.</b> Sua classificação é: <b>Obesidade Grave</b> com o grau de obesidade: <b>III</b>, procure um médico especialista.";
                }else {
                    echo "Insira um número válido.";
                }
            }
            ?>
        </p>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>