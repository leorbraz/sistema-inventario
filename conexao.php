<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "inventario";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if (!$conexao) {
    echo "Falha na conexão com Banco de Dados.";
}

?>