<?php
require_once "conexao.php";

$cep_usuario = $_POST["cep_usuario"];
$rua_usuario = $_POST["rua_usuario"];
$numero_usuario = $_POST["numero_usuario"];
$complemento_usuario = $_POST["complemento_usuario"];
$bairro_usuario = $_POST["bairro_usuario"];
$cidade_usuario = $_POST["cidade_usuario"];
$tipo_usuario = $_POST["tipo_usuario"];



if (empty($cep_usuario) || empty($rua_usuario) || empty($numero_usuario) || empty($complemento_usuario) || empty($bairro_usuario) || empty($cidade_usuario) || empty($tipo_usuario)) {
    die("Campos vazios");
}

$sql = "INSERT INTO pedido_usuario (cep_usuario,rua_usuario,numero_usuario,complemento_usuario,bairro_usuario,cidade_usuario,tipo_usuario)
VALUES ('$cep_usuario','$rua_usuario','$numero_usuario','$complemento_usuario','$bairro_usuario','$cidade_usuario','$tipo_usuario')";

if (mysqli_query($conexao, $sql)) {
    header("Location: ../carrinho.php?sucesso=1");
    exit();
} else {
    echo "Erro: " . mysqli_error($conexao);
}

//         // Executa a inserção no banco de dados
//         if ($stmt->execute()) {
//             echo "<script>
//                     alert('Pedido e endereço registrados com sucesso!');
//                     window.location.href = '../carrinho.html'; // Retorna para a página do carrinho ou index </script>";
//         } else {
//             echo "Erro ao registrar o pedido.";
//         }
    
//     catch (PDOException $e) {
//     // Exibe o erro se algo der errado na sintaxe ou inserção
//     die("Erro ao salvar no banco de dados: " . $e->getMessage());
// }
// ?>