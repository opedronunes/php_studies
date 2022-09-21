<?php

session_start();

require_once "./conexao/conexao.php";

$busca = mysqli_query($con,"SELECT * FROM tb_usuario WHERE nu_cpf_usuario = '".$_POST["cpf"]."'");

$registros = mysqli_num_rows($busca);

if($registros == 1){
    header("Location: ./registro.php?cad=erro_cpf");
    exit;
}

$recebe = mysqli_query($con, "INSERT INTO tb_usuario(no_usuario, nu_cpf_usuario, email_usuario, senha_usuario, cod_perfil, cod_ativo)
VALUES(
    '".$_POST["nome"]."', 
    '".$_POST["cpf"]."', 
    '".$_POST["email"]."',
    '".base64_encode($_POST["senha"])."',
    ".$_POST["ativo"].")"
);

if ($recebe) {
    header("Location: ./registro.php?cad=ok");
    exit;
}else{
    header("Location: ./registro.php?cad=erro");
    exit;
}
?>