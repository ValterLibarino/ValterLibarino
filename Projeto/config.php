<?php
$host = "localhost";
$usuario = "root";
$senha = ""; 
$banco = "atividade";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if ($conexao->connect_errno) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}
$consulta = "INSERT INTO usuarios";
$resultado = $conexao->query($consulta);

$conexao->close();
?>