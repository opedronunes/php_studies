<?php

require_once "./conexao/conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$busca =mysqli_query($con, "SELECT * FROM tb_usuario WHERE email_usuario = '$email' AND senha_usuario = '$senha'");

$contador = mysqli_num_rows($busca);

if ($contador == 1) {
    header("Location: ../index.php");
    exit;
}else{
    header("Location: index.php");
    exit;
}