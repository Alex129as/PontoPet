<?php
include ("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO cadastro (cpf,nome,email,senha,telefone) VALUES ('$cpf','$nome', $email', '$senha', '$telefone')";

if (mysqli_query($conexao, $sql)) {
    echo "cadastrado com sucesso";
}
else {
    echo "erro".mysqli_error($conexao);
}

?>
