<?php

require_once "../conexao/conexao.php";

$sql = mysqli_query($con, "SELECT
                        u.id_usuario,
                        u.no_usuario,
                        u.nu_cpf_usuario,
                        u.email_usuario,
                        p.no_perfil,
                        a.descricao_ativo
                        FROM 
                        tb_usuario as u
                        INNER JOIN tb_perfil as p ON
                        p.cod_perfil = u.cod_perfil
                        INNER JOIN tb_ativo as a ON
                        a.cod_ativo = u.cod_ativo 
                        ORDER BY no_usuario;");

?>