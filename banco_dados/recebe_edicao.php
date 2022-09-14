<?php

require_once "./connect.php";

$busca = mysqli_query($con, "SELECT * FROM tb_user WHERE nu_cpf = '".$_POST["cpf"]."'");

$contador = mysqli_num_rows($busca);

if ($contador) {
    while ($registros = mysqli_fetch_array($busca)) {
        
        session_start();
        
        $_SESSION['nome'] = $registros['no_user'];
        $_SESSION['cpf'] = $registros['nu_cpf'];
        $_SESSION['endereco'] = $registros['no_endereco'];
        $_SESSION['perfil_id'] = $registros['nu_perfil'];

    }
    header("Location: edicao.php");
    exit;
}else{
    header("Location: atualizar.php?atualizar=erro_cpf");
    exit;
}