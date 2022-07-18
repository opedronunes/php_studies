<?php
/*
Paulo comprou um microcomputador para controlar o rendimento diário de seu trabalho. 
Toda vez que ele traz um peso de peixes maior que o estabelecido pelo regulamento de pesca 
do estado de São Paulo (50 quilos) deve pagar uma multa de R$ 4,00 por quilo excedente. 
Paulo precisa que você faça um script que leia a variável  (peso de peixes) e calcule o excesso. 
Gravar na variável  a quantidade de quilos além do limite e na variável  o valor da multa que 
Paulo deverá pagar. Imprima os dados do script com as mensagens adequadas.
*/

$limite = 50;
$peso = number_format(63, 2);
$multa = number_format(4, 2);


if ($peso > 50) {
    $dif_peso = number_format(($peso - $limite), 2);
    $vl_multa = round($dif_peso * $multa, 2);
    echo 'Oops, o peso do peixe é de '.$peso.' excedendo o limite permitido! <br>';
    echo "A diferença é de: ".$dif_peso.' kilos. <br>';
    echo 'O valor da multa é de: R$'.$vl_multa.' reais.';
}elseif($peso <= 50){
    echo 'Que ótimo, o peso é de '.$peso.' kilos e está dentro do limite!';
}
?>