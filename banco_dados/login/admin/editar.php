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
    <title>Editar Usuário</title>
</head>
<body>
    <?php include("./header.php")?>
    <?php
        $text = "";
        if (isset($_GET["atualizar"])) {
            if ($_GET["atualizar"] == "ok") {
                $text = "<p class='alert alert-success my-2'>Dados atualizados com sucesso!</p>";
            }
        }
    ?>
    <main>
        <div class="container">

            <form action="./recebe_editar.php" method="POST">
                <span><?= $text ?></span>
                <label class="form-label" for="no_usuario">Nome:</label>
                <input class="form-control" type="text" name="nome" id="no_usuario" value="<?= $_SESSION['no_usuario'] ?>">

                <label class="form-label" for="email_usuario">E-mail:</label>
                <input class="form-control" type="email" name="email" id="" value="<?= $_SESSION['email_usuario'] ?>">

                <label class="form-label" for="senha_usuario">Senha:</label>
                <input class="form-control" type="text" name="senha" id="senha_usuario" value="<?= base64_decode($_SESSION["senha_usuario"]); ?>">

                <div class="by-2">
                    <label for="perfil" class="form-label"></label>
                    <select name="perfil" id="perfil" class="form-select">
                        <option value="1" <?= ($_SESSION['perfil_id'] == 1) ? 'selected' : '' ?> >Administrador</option>
                        <option value="2" <?= ($_SESSION['perfil_id'] == 2) ? 'selected' : '' ?> >Professor</option>
                        <option value="3" <?= ($_SESSION['perfil_id'] == 3) ? 'selected' : '' ?> >Aluno</option>
                    </select>
                </div>
                

                <div class="my-2">
                    <input class="btn btn-warning" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </main>
</body>
</html>
<?php }else{
    header("Location: ./painel.php");
}

?>
