<?php
require "conexao.php";

$raca = $_POST['raca'];
$data_nasc = $_POST['data_nasc'];
$descricao = $_POST['descricao'];
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_foto']));

$sql = "INSERT INTO cadastro_pet (raca,descricao,data_nasc,foto) VALUES ('$raca','$descricao', STR_TO_DATE($data_nasc,'%d %m %Y'), '$foto')";

$insert = mysqli_query($conexao, $sql);

if (!$insert) {

   echo "Error";

}

?>