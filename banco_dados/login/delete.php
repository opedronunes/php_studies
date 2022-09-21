<?php
session_start();
if($_SESSION['no_perfil'] == 'Administrador') { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Excluir usuário</title>
</head>
<body>
    <?php include('./recebe_delete.php'); ?>
    <?php include('./header.php'); ?>
    <div class="container">
        <h1>Tela de exclusão</h1>
        <table border="1"> 
            <tr> 
                <td>Id</td> 
                <td>Nome</td> 
                <td>CPF</td> 
                <td>E-mail</td>
                <td>Perfil</td> 
                <td>Status</td> 
            </tr> 
            <?php while($dados = $con->fetch_array()) { ?> 
            <tr> 
                <td><?php echo $dados['id']; ?></td>
                <td><?php echo $dados['no_usuario']; ?></td>
                <td><?php echo $dados['nu_cpf_usuario']; ?></td> 
                <td><?php echo $dados['email_usuario']; ?></td>
                <td><?php echo $dados['cod_perfil']; ?></td>
                <td><?php echo $dados['cod_ativo']; ?></td>

                 
                <td> 
                    <a href="usu_editar.php?codigo=<?php echo $dados['usu_codigo']; ?>">Editar</a> 
                    <a href="usu_excluir.php?codigo=<?php echo $dados['usu_codigo']; ?>">Excluir</a> 
                </td> 
            </tr> 
        <?php } ?> 
    </table> 
    </div>
</body>
</html>
    




<?php }else{
    header("Location: ./painel.php");
}