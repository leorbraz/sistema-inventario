<?php

include_once("conexao.php");

$setor = $_POST['setor'];
$colaborador= $_POST['colaborador'];
$marca = $_POST['marca'];
$processador = $_POST['processador'];
$memoria = $_POST['memoria'];
$hd = $_POST['hd'];
$ssd = $_POST['ssd'];
$monitor = $_POST['monitor'];
$modelo = $_POST['modelo'];
$tamanho = $_POST['tamanho'];
$teclado = $_POST['teclado'];
$mouse = $_POST['mouse'];
$mac = $_POST['mac'];
$ip = $_POST['ip'];
$so = $_POST['so'];
$po = $_POST['po'];
$situacao = $_POST['situacao'];
$observacao = $_POST['obs'];

$sql = "insert into computadores (setor, colaborador, marca, processador, memoria, hd, ssd, monitor, modelo, tamanho, teclado, mouse, mac, ip, so, po, situacao, obs) values ('$setor', '$colaborador','$marca', '$processador', '$memoria', '$hd', '$ssd', '$monitor', '$modelo', '$tamanho', '$teclado', '$mouse', '$mac', '$ip', '$so', '$po', '$situacao', '$observacao')";

$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Inventário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="conteiner">
        <nav>
            <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                <a href="consultas.php"><li>Consultas</li></a>
            </ul>
        </nav>
        <section>
            <h1 class="title">Confirmação de Cadastro</h1>
            <hr><br><br>

            <div class="subtitle">
                <?php

                if ($linhas == 1){
                    echo "Cadastro efetuado com sucesso!";
                } else {
                    echo "Cadastro não efetuado. <br>";
                }

                ?>
            </div>
        </section>
    </div>
</body>
</html>