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
    <?php include("./header.php") ?>           
    <main class="container">
        <h1>Área administrativa</h1>
    </main>
</body>
</html>

<?php }else{
    header("Location: ./painel.php");
} ?>