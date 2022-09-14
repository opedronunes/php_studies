<?php

require_once "./connect.php";

session_start();

$busca = mysqli_query($con, "SELECT id FROM tb_user WHERE nu_cpf = '".$_SESSION['cpf']."'");

while($registro = mysqli_fetch_array($busca)){

    $id = $registro['id'];
}

$contador = mysqli_num_rows($busca);

if ($contador != 1) {

    header("Location: atualizar.php?atualizar=erro_cpf");
    exit;

}else{
    $atualiza = mysqli_query($con, "UPDATE tb_user
    set no_user = '".$_POST['nome']."', nu_cpf= '".$_POST["cpf"]."', no_endereco= '".$_POST['endereco']."', nu_perfil = '".$_POST['perfil_id']."'
    where id = $id;");


    header("Location: atualizar.php?atualizar=ok");
    exit;
}



