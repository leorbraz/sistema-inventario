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
                <a href="consultas.php"><li>Consultar</li></a>
            </ul>
        </nav>
        <section>
            <h1 class="title">Cadastros de Máquinas</h1>
            <hr><br><br>

            <form method="post" action="processa.php" class="formulario">
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn">
                <br><br><br>

                Setor<br>
                <input type="text" name="setor" class="campo" maxlength="40" required autofocus><br>
                Colaborador<br>
                <input type="text" name="colaborador" class="campo" maxlength="50"><br><br>
                <h3>Computador</h3><br>
                Patrimônio
                <input type="text" name="patrimonio" class="campo" maxlength="50"><br>
                Marca
                <input type="text" name="marca" class="campo" maxlength="50"><br>
                Processador
                <input type="text" name="processador" class="campo" maxlength="50"><br>
                Memória
                <input type="text" name="memoria" class="campo" maxlength="50"><br>
                HD
                <input type="text" name="hd" class="campo" maxlength="50"><br>
                SSD
                <input type="text" name="ssd"" class="campo" maxlength="50"><br><br>
                <h3>Monitor</h3><br>
                Marca Monitor
                <input type="text" name="monitor" class="campo" maxlength="50"><br>
                Modelo
                <input type="text" name="modelo" class="campo" maxlength="50"><br>
                Tamanho
                <input type="text" name="tamanho" class="campo" maxlength="50"><br>
                Tipo
                <input type="text" name="tipo" class="campo" maxlength="50"><br>
                Patrimônio
                <input type="text" name="patrimonio_monitor" class="campo" maxlength="50"><br><br>
                <h3>Periféricos</h3><br>
                Teclado
                <input type="text" name="teclado" class="campo" maxlength="50"><br>
                Mouse
                <input type="text" name="teclado" class="campo" maxlength="50"><br>
                Outros
                <input type="text" name="teclado" class="campo" maxlength="50"><br><br>
                <h3>Rede</h3><br>
                Host
                <input type="text" name="host" class="campo" maxlength="50"><br>
                MAC
                <input type="text" name="mac" class="campo" maxlength="50"><br>
                IP
                <input type="text" name="ip" class="campo" maxlength="50"><br><br>
                <h3>Software</h3><br>
                Sistema Operacional
                <input type="text" name="so" class="campo" maxlength="50"><br><br>
                Pacote Office<br>
                <input type="text" name="po" class="campo" maxlength="50"><br>
                Licenças<br>
                <input type="text" name="licencas" class="campo" maxlength="50"><br>
                Situação<br>
                <input type="text" name="situacao" class="campo" maxlength="50"><br>
                Observação<br>
                <input type="text" name="obs" class="campo" maxlength="50"><br>

            </form>
        </section>
    </div>
</body>
</html>