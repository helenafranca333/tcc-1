<?php
require_once "conexao.php";

$cpf_usuario = $_POST["cpf_usuario"];
$email_usuario = $_POST["email_usuario"];
$nome_usuario = $_POST["nome_usuario"];
$senha_usuario = $_POST["senha_usuario"];

if (empty($cpf_usuario) || empty($email_usuario) || empty($nome_usuario) || empty($senha_usuario)) {
    die("Campos vazios");
}

$sql = "INSERT INTO cadastro_usuario (cpf_usuario,email_usuario,nome_usuario,senha_usuario)
VALUES ('$cpf_usuario','$email_usuario','$nome_usuario','$senha_usuario')";

if (mysqli_query($conexao, $sql)) {
    header("Location: ../cadastro.php?sucesso=1");
    exit();
} else {
    echo "Erro: " . mysqli_error($conexao);
}
?>