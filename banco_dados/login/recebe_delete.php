<?php

require_once "./conexao/conexao.php";

$dados = mysqli_query($con,"SELECT * FROM tb_usuario");

$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

?>