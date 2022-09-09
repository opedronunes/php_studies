<?php

require_once "./connect.php";

$sql = "SELECT id, username FROM tb_users";
$resultado = $con->query($sql);

//Verifica se há registro na tabela
if($resultado->num_rows > 0){
    while($data = $resultado->fetch_assoc()){
        echo "id: " . $data["id"] . " - Nome: " . $data["username"] . "<br>";
    };
}else{
    echo "Não encontramos valores no banco";
}

$con->close();

?>
