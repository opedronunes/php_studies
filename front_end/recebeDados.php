<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $email = $_POST["email"];
        $sexo = $_POST["sexo"];

        $number = $_POST["number"];

    ?>
    <form action="" method="post" style="width: 400px; display: flex; justify-content: center; flex-direction: column; border: 1px solid gray; border-radius: 8px;"> 

        <div style="display: flex; flex-direction: column; padding: 8px;">
            <label for="name">Nome:</label>
            <input type="text" name="nome" id="name" value="<?= $nome; ?>">
        </div>

        <div style="display: flex; flex-direction: column; padding: 8px;">
            <label for="idade">idade:</label>
            <input type="number" name="idade" id="idade" value="<?= $idade; ?>">
        </div>

        <div style="display: flex; flex-direction: column; padding: 8px;">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $email; ?>">
        </div>

        <div style="display: flex; padding: 8px;">
            <label for="masculino">Sexo:</label>
            <input type="radio" name="sexo" id="masculino" <?php if(isset($sexo) && $sexo == 1) echo 'checked="checked"';?> >Masculino
            <input type="radio" name="sexo" id="masculino" <?= isset($sexo) && $sexo == 2 ? 'checked="checked"': '';?> >Feminino
        </div>
    </form>

    <h4>
        
        <?php
        
            switch($number){

                case 2:
                    echo "Mês $number possue 28 dias.";
                break;
                case 4:    
                case 6:        
                case 9:        
                case 11:
                    echo "Mês $number possue 30 dias.";
                break;
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    echo "Mês $number possue 31 dias.";
                break;  
                default:
                echo "Mês não encontrado";  

            }

        ?>
    </h4>

    <?php

        $limite = $_POST["limite"];
        $peso = $_POST["peso"];
        $multa = $_POST["multa"];

        /*
        $limite = 50;
        $peso = number_format(63, 2);
        $multa = number_format(4, 2);
        */
        
        if ($peso > 50) {
            $dif_peso = number_format(($peso - $limite), 2);
            $vl_multa = round($dif_peso * $multa, 2);
            echo '<h4 class="text-danger">Oops, o peso do peixe é de '.$peso." excedendo o limite permitido!</h4><br>";
            echo '<h4 class="text-primary">A diferença é de: '.$dif_peso.' kilos.</h4><br>';
            echo "<h4>O valor da multa é de: R$".$vl_multa.' reais.</h4>';
        }elseif($peso <= 50){
            echo '<h4>Que ótimo, o peso é de '.$peso.' kilos e está dentro do limite!</h4>';
        }
    ?>
</body>
</html>