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
    <title>cadastro de usuário</title>
    <style>
        header{
            display: flex;
            background: #121214;
            color: white;
        }
        nav{
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
        }
        p, small{
            margin: 0;
        }
        #login{
            display: flex;
        }
        nav ul{
            display: flex;
            gap: 15px;
            margin: 0;
        }
        nav ul li{
            list-style: none;
        }
        nav a{
            text-decoration: none;
            color: white;
            transition: all .3s;
        }
        nav a:hover{
            color: #8d8d8d;
        }
    </style>
</head>
<body>
    <?php
        $text = "";

        if ($_GET["cad"] == "erro_cpf") {
            $text = "<p class='alert alert-danger'>Usuário já cadastrado! Informe outro cpf.</p>";
        }elseif($_GET["cad"] == "ok"){
            $text = "<p class='alert alert-success'>Registrado com sucesso!.</p>";
        }elseif($_GET["cad"] == "erro"){
            $text = "<p class='alert alert-warning'>Erro no cadastro, tente novamente.</p>";
        }
    ?>
    <main>
        <?php include('./header.php') ?>
        <section class="container" style="height: 100vh;">
            <div class="d-flex justify-content-center align-items-center flex-column h-100">
                <h4 class="my-4">Tela de registro</h4>
                <form action="./recebe_registro.php" method="POST">
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
                        <label class="form-label" for="email">Email:</label>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </div>
                    <div class="by-2">
                        <label class="form-label" for="senha">Senha:</label>
                        <input class="form-control" type="password" name="senha" id="senha" required>
                    </div>

                    <div class="by-2">
                        <label class="form-label" for="perfil">Perfil:</label>
                        <select class="form-select" name="perfil" id="perfil" required>
                            <option value="5">Adminstrador</option>
                            <option value="10">Professor</option>
                            <option value="15">Aluno</option>
                        </select>
                    </div>

                    <div class="by-2">
                        <label class="form-label" for="ativo">Status:</label>
                        <select class="form-select" name="ativo" id="ativo" required>
                            <option value="1">Ativo</option>
                            <option value="2">Inativo</option>
                        </select>
                    </div>
                    <input class="btn btn-secondary my-2" type="submit" value="Enviar">
                </form>
            </div>
        </section>
    </main>
</body>
</html>

<?php }else{
    header("Location: ./painel.php");
}

?>