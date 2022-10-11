<?php

$servername = "127.0.0.1";
$username = "root";
$password = "Pedro@2022";
$dbname = "db_users_senai";

try {
  $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "A conexão com o banco de dados falhou " . $e->getMessage();
}

//$con = new PDO("mysql:host=127.0.0.1;dbname=db_users_senai","root","Pedro@2022");
/*
-> INSERT
$stmt =$conexao->prepare("INSERT INTO tb_usuario(no_usuario, nu_cpf_usuario, email_usuario, senha_usuario, cod_perfil, cod_ativo)VALUES(:no_usuario, :nu_cpf_usuario, :email_usuario, :senha_usuario, :cod_perfil, :cod_ativo);");

$stmt->bindParam(":no_usuario", $param_nome, PDO::PARAM_STR);
$stmt->bindParam(":nu_cpf_usuario", $param_cpf, PDO::PARAM_STR);
$stmt->bindParam(":email_usuario", $param_email, PDO::PARAM_STR);
$stmt->bindParam(":senha_usuario", $param_senha, PDO::PARAM_STR);
$stmt->bindParam(":cod_perfil", $param_perfil, PDO::PARAM_INT);
$stmt->bindParam(":cod_ativo", $param_ativo, PDO::PARAM_INT);

$param_nome = "Pepe";
$param_cpf = "00000000055";
$param_email = "pepe@test.com";
$param_senha = base64_encode("123456");
$param_perfil = 10;
$param_ativo = 1;

$stmt->execute();
*/

$nome="Francisco";
$cpf = "11111111";
$id = 27;
$stmt = $conexao->prepare("update tb_usuario set no_usuario = ?, nu_cpf_usuario = ? where id_usuario = ?");
$stmt->bindParam(1,$nome);
$stmt->bindParam(2,$cpf);
$stmt->bindParam(3,$id);
$stmt->execute();