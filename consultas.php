<?php

include_once("conexao.php");

$setor = $_POST['setor'];
$colaborador= $_POST['colaborador'];
$patrimonio = $_POST['patrimonio'];
$marca = $_POST['marca'];
$processador = $_POST['processador'];
$memoria = $_POST['memoria'];
$hd = $_POST['hd'];
$ssd = $_POST['ssd'];
$monitor = $_POST['monitor'];
$modelo = $_POST['modelo'];
$tamanho = $_POST['tamanho'];
$tipo = $_POST['tipo'];
$teclado = $_POST['teclado'];
$mouse = $_POST['mouse'];
$outros = $_POST['outros'];
$host = $_POST['host'];
$mac = $_POST['mac'];
$ip = $_POST['ip'];
$sistemaOperacional = $_POST['so'];
$pacoteOffice = $_POST['po'];
$licenca = $_POST['licenca'];
$situacao = $_POST['situacao'];
$observacao = $_POST['observacao'];

$sql = "insert into usuarios (setor, colaborador, patrimonio, marca, processador, memoria, hd, ssd, monitor, modelo, tamanho, tipo, teclado, mouse, outros, host, mac, ip, so, po, licenca, situacao, observacao) values ('$setor', '$colaborador', '$patrimonio', '$marca', '$rocessador', '$memoria', '$hd', '$ssd', '$monitor', '$modelo', '$tamanho', '$tipo', '$teclado', '$mouse', '$outros', '$host', '$mac', '$ip', '$so', '$po', '$licenca', '$situacao', '$observacao')";
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