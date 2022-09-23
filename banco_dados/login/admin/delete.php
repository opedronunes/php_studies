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
    <script src="https://unpkg.com/phosphor-icons"></script>
    <title>Excluir usuário</title>
    <style>
        i{
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <?php include('./recebe_delete.php'); ?>
    <?php include('./header.php'); ?>
    <div class="container">
        <h1>Tela de exclusão</h1>
        <table class="table table-striped"> 
            <tr> 
                <th scope="col">#</th> 
                <th scope="col">Nome</th> 
                <th scope="col">CPF</th> 
                <th scope="col">E-mail</th>
                <th scope="col">Perfil</th>         
                <th scope="col">Status</th> 
                <th scope="col">Ação</th> 
            </tr> 
            <?php while($dados = mysqli_fetch_assoc($sql)) { ?> 
            <tr> 
                <th><?php echo $dados['id_usuario']; ?></th>
                <td><?php echo $dados['no_usuario']; ?></td>
                <td><?php echo $dados['nu_cpf_usuario']; ?></td> 
                <td><?php echo $dados['email_usuario']; ?></td>
                <td><?php echo $dados['no_perfil']; ?></td>
                <td><?php echo $dados['descricao_ativo']; ?></td>

                 
                <td> 
                    <a href="usu_editar.php?codigo=<?php echo $dados['usu_codigo']; ?>"><i class="ph-pencil-simple"></i>Editar</a> 
                    <a href="usu_excluir.php?codigo=<?php echo $dados['usu_codigo']; ?>"><i class="ph-trash"></i>Excluir</a> 
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