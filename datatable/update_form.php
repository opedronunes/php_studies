<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <title>Update</title>
</head>
<body>
    <?php

    require_once "./conexao.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM tb_usuario WHERE id_usuario = $id";
    $resultado = mysqli_query($con, $query);

    $registro = mysqli_fetch_assoc($resultado);

    ?>
    <div class="container">
        <div class="card mt-4" id="from-body">
            <div class="card-header">
                Update
            </div>
            <div class="card-body">
                <form action="./recebe_update.php" method="post">

                    <input type="hidden" name="id" value="<?= $registro['id_usuario'] ?>">

                    <div class="my-2">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nome" class="form-control" id="" value="<?= $registro['no_usuario'] ?>">
                    </div>
                    <div class="my-2">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" name="email" class="form-control" id="" value="<?= $registro['email_usuario'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary my-2" id="submit">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>