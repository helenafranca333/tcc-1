<?php
require_once "conexao.php";

$email_usuario = $_POST["email_usuario"];
$senha_usuario = $_POST["senha_usuario"];

$sql = "SELECT * FROM cadastro_usuario 
        WHERE email_usuario = '$email_usuario' 
        AND senha_usuario = '$senha_usuario'";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1) {
    header("Location: ../index.html?resultado=1");

} else {
    echo "<script>
        alert('Usuário não encontrado! Faça seu cadastro.');
        window.location.href='../index.html';
    </script>";

}
?>