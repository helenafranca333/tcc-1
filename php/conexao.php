<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "rebirth_prosthetics";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");
header("Location: ../cadastro.php");
?>