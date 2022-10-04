<?php

require './conexao.php';

$sql = "INSERT INTO tb_usuario(no_usuario, nu_cpf_usuario, email_usuario, senha_usuario, cod_perfil, cod_ativo)VALUES(
    '".$_POST["nome"]."', 
    '".$_POST["cpf"]."', 
    '".$_POST["email"]."',
    '".base64_encode($_POST["senha"])."',
    '".$_POST["perfil"]."',
    ".$_POST["ativo"].")";

    
$resultado = mysqli_query($con, $sql);


?>

