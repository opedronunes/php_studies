<?php

require_once "./conexao/conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$busca =mysqli_query($con, "SELECT * FROM tb_usuario WHERE email_usuario = '$email' AND senha_usuario = '$senha'");
$busca = mysqli_query($con, "SELECT
                                u.no_usuario,
                                u.nu_cpf_usuario,
                                u.email_usuario,
                                p.no_perfil
                            FROM 
                                tb_usuario as u
                            INNER JOIN
                                tb_perfil as p
                                    ON
                                p.cod_perfil = u.cod_perfil
                            WHERE
                                email_usuario = '$email'
                            AND senha_usuario = '$senha'
                            AND cod_ativo = 1;");

while ($registro = mysqli_fetch_array($busca)) {
    //Guardar os dados do usuario e registrar na session
    session_start();
    $_SESSION['no_usuario'] = $registro['no_usuario'];
    $_SESSION['nu_cpf_usuario'] = $registro['nu_cpf_usuario'];
    $_SESSION['email_usuario'] = $registro['email_usuario'];
    $_SESSION['no_perfil'] = $registro['no_perfil'];
    $_SESSION['loggedin'] = true;
}



$contador = mysqli_num_rows($busca);

if ($contador == 1) {
    header("Location: ./painel.php");
    exit;
}else{
    header("Location: index.php?login=erro");
    exit;
}