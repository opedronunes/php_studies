<?php

require_once "./connect.php";

$busca = mysqli_query($con,"SELECT * FROM tb_user WHERE nu_cpf = '".$_POST["cpf"]."'");

$registros = mysqli_num_rows($busca);

if($registros == 1){
    header("Location: registro.php?cad=erro_cpf");
    exit;
}

$recebe = mysqli_query($con, "INSERT INTO tb_user(no_user, nu_cpf, no_endereco, nu_perfil)
VALUES(
    '".$_POST["nome"]."', 
    '".$_POST["cpf"]."', 
    '".$_POST["endereco"]."', 
    ".$_POST["perfil_id"].")"
);

if ($recebe) {
    header("Location: registro.php?cad=ok");
    exit;
}else{
    header("Location: registro.php?cad=erro");
    exit;
}


/*
$no_user = $_POST["nome"];
$nu_cpf = $_POST["cpf"];
$no_endereco = $_POST["endereco"];
$nu_perfil = $_POST["perfil_id"];
*/

?>