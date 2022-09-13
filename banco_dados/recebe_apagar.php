<?php

require_once "./connect.php";

$busca = mysqli_query($con, "SELECT * FROM tb_user WHERE nu_cpf = '".$_POST["cpf"]."'");

while($registro = mysqli_fetch_array($busca)){
    $id = $registro['id'];
}

$registros = mysqli_num_rows($busca);

if ($registros == 1) {

    $remover = mysqli_query($con, "DELETE FROM tb_user WHERE id = $id");

    if(isset($remover)){
        header("Location: apagar.php?remov=ok");
        exit;
    }else{
        header("Location: apagar.php?remov=erro");
        exit;
    }

}else{
    header("Location: apagar.php?remov=erro_cpf");
    exit;
}