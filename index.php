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
        <nav> <!-- Menu a esquerda -->
            <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                <a href="consultas.php"><li>Consultas</li></a>
            </ul>
        </nav> <!-- Fecha menu a esquerda -->
        <section>
            <h1 class="title">Cadastros de Máquinas</h1>
            <hr><br><br>

            <form method="post" action="processa.php" class="formulario">
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn">
                <br><br><br>

                Setor<br>
                <input type="text" name="setor" class="campo" maxlength="50" required autofocus><br>
                
                Colaborador<br>
                <input type="text" name="colaborador" class="campo" maxlength="50"><br><br>
                
                <h3>Computador</h3><br>
                                
                Marca<br>
                <input type="text" name="marca" class="campo" maxlength="50"><br>
                
                <!-- <select class="span" name="marca" value="">
                    <option value="">Selecione</option>
                    <option value="COMPAQ">COMPAQ</option>
                    <option value="PAUTA">PAUTA</option>
                    <option value="HP">HP</option>
                    <option value="OUTRO">OUTRO</option>
                </select><br> -->
                
                Processador<br>
                <input type="text" name="processador" class="campo" maxlength="50"><br>
                
                Memória<br>
                <input type="text" name="memoria" class="campo" maxlength="50"><br>
                
                HD<br>
                <input type="text" name="hd" class="campo" maxlength="50"><br>
                
                SSD<br>
                <input type="text" name="ssd" class="campo" maxlength="50"><br><br>
                
                <h3>Monitor</h3><br>
                
                Marca Monitor<br>
                <input type="text" name="monitor" class="campo" maxlength="50"><br>
                
                Modelo<br>
                <input type="text" name="modelo" class="campo" maxlength="50"><br>
                
                Tamanho<br>
                <input type="text" name="tamanho" class="campo" maxlength="50"><br>
                
                <h3>Periféricos</h3><br>
                
                Teclado<br>
                <input type="text" name="teclado" class="campo" maxlength="50"><br>
                
                Mouse<br>
                <input type="text" name="mouse" class="campo" maxlength="50"><br>
                
                <h3>Rede</h3><br>
                
                MAC<br>
                <input type="text" name="mac" class="campo" maxlength="50"><br>
                
                IP<br>
                <input type="text" name="ip" class="campo" maxlength="50"><br><br>
                
                <h3>Software</h3><br>
                
                Sistema Operacional<br>
                <input type="text" name="so" class="campo" maxlength="50"><br>
                
                Pacote Office<br>
                <input type="text" name="po" class="campo" maxlength="50"><br>
                
                Situação<br>
                <select name="situacao" class="campo" value="">
                    <option value="">Selecione</option>
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                </select><br> 
                
                Observação<br>
                <input type="text" name="obs" class="campo" maxlength="50"><br>

            </form>
        </section>
    </div>
</body>
</html>