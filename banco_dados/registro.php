
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de usuário</title>
</head>
<body>

    <?php
        $text = "";

        if ($_GET["cad"] == "erro_cpf") {
            $text = "<p style='color: red;'>Usuário já cadastrado! Informe outro cpf.</p>";
        }
        if ($_GET["cad"] == "ok") {
            $text = "<p style='color: green;'>Registrado com sucesso!.</p>";
        }
        if ($_GET["cad"] == "erro") {
            $text = "<p style='color: red;'>Erro no cadastro, tente novamente.</p>";
        }

        echo $text;
    ?>

    <form action="recebe_registro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>
        <br>
        <label for="">CPF:</label>
        <input type="text" name="cpf" id="cpf">
        <br>
        <br>
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco">
        <br>
        <br>
        <label for="perfil_id">Perfil:</label>
        <input type="number" name="perfil_id" id="perfil_id">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>