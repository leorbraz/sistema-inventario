<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro'] :"";

$sql = "select * from computadores where colaborador like '%$filtro%' ";
//$sql = "select * from computadores where setor like '%$filtro%' ";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

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
            <h1 class="title">Consultas</h1>
            <hr><br>

            <form class="form" method="get" action="">
                Filtrar por Colaborador: <input type="text" name="filtro" class="campo" required autofocus>
                <input type="submit" value="Pesquisar" class="btn">
            </form>
            <div class="print">
                <?php

                print "Resultado da pesquisa com a palavra <b>$filtro</b><br><br>";

                print "$registros registros encontrados.";

                print "<br><br>";

                while($exibirRegistros = mysqli_fetch_array($consulta)) {

                    $codigo = $exibirRegistros[0];
                    $setor = $exibirRegistros[1];
                    $colaborador= $exibirRegistros[2];
                    $marca = $exibirRegistros[3];
                    $processador = $exibirRegistros[4];
                    $memoria = $exibirRegistros[5];
                    $hd = $exibirRegistros[6];
                    $ssd = $exibirRegistros[7];
                    $monitor = $exibirRegistros[8];
                    $modelo = $exibirRegistros[9];
                    $tamanho = $exibirRegistros[10];
                    $teclado = $exibirRegistros[11];
                    $mouse = $exibirRegistros[12];
                    $mac = $exibirRegistros[13];
                    $ip = $exibirRegistros[14];
                    $so = $exibirRegistros[15];
                    $po = $exibirRegistros[16];
                    $situacao = $exibirRegistros[17];
                    $observacao = $exibirRegistros[18];
                    
                    print "<article>";
                
                    print"codigo: <b>$codigo</b><br>";
                    print"Nome: $setor<br>";
                    print"Colaborador: $colaborador<br>";
                    print"Marca Computador: $marca<br>";
                    print"Processador: $processador<br>";
                    print"Memória: $memoria<br>";
                    print"HD: $hd<br>";
                    print"SSD: $ssd<br>";
                    print"Marca monitor: $monitor<br>";
                    print"Modelo: $modelo<br>";
                    print"Tamanho:$tamanho<br>";
                    print"Teclado: $teclado<br>";
                    print"Mouse: $mouse<br>";
                    print"MAC: $mac<br>";
                    print"IP: $ip<br>";
                    print"Sistema Operacional: $so<br>";
                    print"Pacote Office: $po<br>";
                    print"Situação: $situacao<br>";
                    print"Observação: $observacao<br>";


                    print "</article>";

                }

                mysqli_close($conexao);

                ?>

            </div>
        </section>
    </div>
</body>
</html>