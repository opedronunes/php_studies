
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>cadastro de usuário</title>
</head>
<body>
    <?php
        $text = "";
        if (isset($_GET["login"])) {
            if ($_GET["login"] == "erro") {
                $text = "<p class='alert alert-danger my-2'>Usuário inválido ou dados incorretos!</p>";
            }elseif ($_GET["login"] == "err_acesso") {
                $text = "<p class='alert alert-danger my-2'>Faça Login para acessar!</p>";
            }
        }
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
            header("Location: ./painel.php");
        }
    ?>
    <main>
        <section class="container" style="height: 100vh;">
            <div class="d-flex justify-content-center align-items-center flex-column h-100">
                <h4 class="my-4">Tela de login</h4>
                <form action="recebe_login.php" method="POST">
                    <span><?= $text ?></span>
                    <div class="my-2">
                        <label class="form-label" for="email">Email:</label>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </div>
                    <div class="by-2">
                        <label class="form-label" for="senha">Senha:</label>
                        <input class="form-control" type="password" name="senha" id="senha" required>
                    </div>
                    <input class="btn btn-secondary my-2" type="submit" value="Enviar">
                </form>
            </div>
        </section>
    </main>
</body>
</html>