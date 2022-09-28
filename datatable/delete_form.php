
<?php
require('./conexao.php');

$id = $_GET['id'];

$query = "delete from tb_usuario where id_usuario= $id";

$resultado = mysqli_query($con, $query);

if($resultado== true){
    header("location: index.php");
}


?>