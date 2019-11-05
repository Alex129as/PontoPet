<?php
    require "conexao.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $GetUser = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha';";
    $Busca = mysqli_query($conexao, $GetUser);

    if ($Busca == TRUE) {
        
        $valor = mysqli_fetch_assoc($Busca);
        if($senha === $valor['senha'] && $email === $valor['email']){

            header("location:index.php");
        }

    }
    

?>

