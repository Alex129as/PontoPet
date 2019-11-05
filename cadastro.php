<?php
require "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO cadastro (cpf,nome,email,senha,telefone) VALUES ('$cpf','$nome', $email', '$senha', '$telefone')";

$insert = mysqli_query($conexao, $sql);

if (!$insert) {

   echo "Error";

}

?>