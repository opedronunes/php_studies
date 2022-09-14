
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Ediçao de usuário</title>
</head>
<body>
    <?php
        $text = "";

        if($_GET["atualizar"] == "ok"){
            $text = "<p style='color: green;'>Dados atualizados com sucesso!.</p>";
        }

        
    ?>
    <?php
    session_start();
    ?>
    <main>
        <section class="container" style="height: 100vh;">
            <div class="d-flex justify-content-center align-items-center flex-column h-100">
                <form action="atualiza_user.php" method="POST">
                    <span><?php echo $text ?></span>
                    <div class="my-2">
                        <label class="form-label" for="nome">Nome:</label>
                        <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $_SESSION['nome'] ?>" required>
                    </div>
                    <div class="by-2">
                        <label class="form-label" for="">CPF:</label>
                        <input class="form-control" type="text" name="cpf" id="cpf" value="<?php echo $_SESSION['cpf'] ?>" required>
                    </div>
                    <div class="by-2">
                        <label class="form-label" for="endereco">Endereço:</label>
                        <input class="form-control" type="text" name="endereco" id="endereco" value="<?php echo $_SESSION['endereco'] ?>" required>
                    </div>

                    <!--

                    <div class="by-2">
                        <label for="" class="form-label"></label>
                        <select name="perfil_id" id="" class="form-select">
                            <option value="1" <?= ($_SESSION['perfil_id'] == 1) ? 'selected' : '' ?> >Administrador</option>
                            <option value="2" <?= ($_SESSION['perfil_id'] == 2) ? 'selected' : '' ?> >Professor</option>
                            <option value="3" <?= ($_SESSION['perfil_id'] == 3) ? 'selected' : '' ?> >Aluno</option>
                            <option value="4" <?= ($_SESSION['perfil_id'] == 4) ? 'selected' : '' ?> >Teste</option>
                        </select>
                    </div>

                    -->


                    <div class="by-2">
                        <label class="form-label" for="perfil_id">Perfil:</label>
                        <input class="form-control" type="number" name="perfil_id" id="perfil_id" value="<?php echo $_SESSION['perfil_id'] ?>" required>
                    </div>
                    <input class="btn btn-secondary my-2" type="submit" value="Enviar">
                </form>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-success my-3" href="./atualizar.php">Voltar página anterior</a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>