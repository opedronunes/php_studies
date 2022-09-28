<?php

require "./conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$query = "UPDATE tb_usuario SET no_usuario = '$nome', email_usuario = '$email' WHERE is_usuario = $id";

$resultado = mysqli_query($con, $query);

if($resultado == true){
    header("Location: index.php");
}

?>