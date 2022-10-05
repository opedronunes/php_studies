<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
    <title>Painel Admin</title>
</head>
<body>
    <header>
        <div class="container">
            <nav >
                <ul>
                    <li><a href="./painel.php">Home</a></li>
                    <li><a href="./admin.php">Administração</a></li>
                    <li><a href="./registro.php">Registar usuário</a></li>
                    <li><a href="./editar.php">Atualizar usuário</a></li>
                    <li><a href="./delete.php">Deletar usuário</a></li>
                    <li>
                        <a href="../logoff.php">Sair</a>
                    </li>
                </ul>
                    
                <div id="login">
                    <p><?php echo $_SESSION['no_usuario']?> - <?php echo $_SESSION['no_perfil'] ?></p>
                </div>
            </nav>
        </div>
    </header>
</body>
</html>
