<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "b17";

// Conectar ao banco de dados
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verificar a conexão
if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
