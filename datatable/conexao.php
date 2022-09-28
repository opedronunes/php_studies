<?php

$host = "127.0.0.1:3306";
$user = "root";
$pass = "Pedro@2022";
$db   = "db_users_senai";


//Cria conexão com o banco
$con = new mysqli($host, $user, $pass, $db);

//Verifica a conexão
if($con->connect_error){
    die("Erro ao conectar: ".$con->connect_error);
}

?>