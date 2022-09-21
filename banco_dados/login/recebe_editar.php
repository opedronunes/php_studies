<?php

session_start();

require_once "./conexao/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_SESSION["nu_cpf_usuario"];
$senha = base64_encode($_POST['senha']);


$atualiza = mysqli_query($con, "update tb_usuario
 set no_usuario = '".$_POST['nome']."',
 email_usuario = '".$_POST['email']."',
 senha_usuario= '".base64_encode($_POST["senha"])."' 
 where nu_cpf_usuario = '".$_SESSION['nu_cpf_usuario']."'; ");

 
header("Location: editar.php?atualizar=ok");
    exit;

?>