<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Atualizar registro</title>
</head>
<body>
    <?php
    $mensagem = "";
    if(isset($_GET["atualizar"])){

        if (($_GET["atualizar"] == "ok")) {
            $mensagem = "<p style='color: green;'>Usuário atualizado com sucesso!</p>";
        }elseif (($_GET["atualizar"] == "erro")) {
            $mensagem = "<p style='color: red;'>Erro, não foi possível atualizar usuário do banco de dados!</p>";
        }elseif (($_GET["atualizar"] == "erro_cpf")) {
            $mensagem = "<p style='color: red;'>Erro, CPF não encontrado!</p>";
        }

    }
    ?>
    <main>
        <section class="container" style="height: 100vh;">
            <div class="d-flex justify-content-center align-items-center flex-column h-100">
            <h4 class="my-4">Tela de Atualização</h4>
                <form action="recebe_edicao.php" method="POST">
                    <span><?php echo $mensagem ?></span>
                    <div class="my-2">
                        <label class="form-label" for="nome">CPF:</label>
                        <input class="form-control" type="text" name="cpf" id="nome" required>
                    </div>
                    <input class="btn btn-secondary my-2" type="submit" value="Enviar">
                </form>
                <div class="d-flex justify-content-start justify-content-center align-items-center gap-2">
                    <a class="btn btn-outline-success my-3" href="./registro.php">Tela de registro</a>
                    <a class="btn btn-outline-warning my-3" href="./atualizar.php">Tela de Atualização</a>
                    <a class="btn btn-outline-danger my-3" href="./apagar.php">Tela de exclusão</a>
                </div>
                
            </div>
        </section>
    </main>
</body>
</html>



