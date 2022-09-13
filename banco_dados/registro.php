
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

        if ($_GET["cad"] == "erro_cpf") {
            $text = "<p style='color: red;'>Usuário já cadastrado! Informe outro cpf.</p>";
        }elseif($_GET["cad"] == "ok"){
            $text = "<p style='color: green;'>Registrado com sucesso!.</p>";
        }elseif($_GET["cad"] == "erro"){
            $text = "<p style='color: red;'>Erro no cadastro, tente novamente.</p>";
        }
    ?>
    <main>
        <section class="container" style="height: 100vh;">
            <div class="d-flex justify-content-center align-items-center flex-column h-100">
                <form action="recebe_registro.php" method="POST">
                    <span><?php echo $text ?></span>
                    <div class="my-2">
                        <label class="form-label" for="nome">Nome:</label>
                        <input class="form-control" type="text" name="nome" id="nome" required>
                    </div>
                    <div class="by-2">
                        <label class="form-label" for="">CPF:</label>
                        <input class="form-control" type="text" name="cpf" id="cpf" required>
                    </div>
                    <div class="by-2">
                        <label class="form-label" for="endereco">Endereço:</label>
                        <input class="form-control" type="text" name="endereco" id="endereco" required>
                    </div>
                    <div class="by-2">
                        <label class="form-label" for="perfil_id">Perfil:</label>
                        <input class="form-control" type="number" name="perfil_id" id="perfil_id" required>
                    </div>
                    <input class="btn btn-secondary my-2" type="submit" value="Enviar">
                </form>
                <div class="d-flex justify-content-start">
                    <a class="text-decoration-none my-3" href="./apagar.php">Apagar registro</a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>