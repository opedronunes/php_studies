<?php

/**
 1 - Crie um algoritmo que guarde em uma variável um valor e verifique se esse valor é positivo, 
negativo ou igual a zero. Mostre na tela se o valor informado é "Valor positivo", 
"Valor Negativo" ou "Igual a zero".
*/

$variavel1 = -1;

if ($variavel1 > 0) {
    echo $variavel1." É maio que 0, portanto valor é POSITIVO!";
}elseif($variavel1 < 0){
    echo $variavel1." é menor que 0, portanto valor é NEGATIVO!";
}elseif($variavel1 == 0){
    echo $variavel1." é igual a zero";
}
echo "\n-----\n";
/**
 2 - Crie um algoritmo que leia um valor de uma variável e exiba a tabuada de 0 a 10 de acordo 
com o numero informado na variável. Exemplo $variavel = 5    Saída 5 x 0 = 0 ; 5 x 1 = 5 ; 5 x 2 = 10......
*/

$variavel2 = 5;

for ($num=0; $num <= 10 ; $num++) { 
    echo "{$num} x {$variavel2} = " . $num * $variavel2 . "\n";
}

/**
 * 3 - Crie um algoritmo que leia o valor de uma variável e informe se o número é par ou ímpar.
 */

echo "\n-----\n";

$parImpar = 4;

echo !($parImpar % 2) ? "É Par." : "É Ímpar";

echo "\n-----\n";

/**
4 - Crie um algoritmo que armazene na variável um número inteiro de 1 a 12 e escreva o mês 
correspondente. Caso o número seja fora desse intervalo, informe que não existe um mês que 
corresponda ao valor informado.
*/

$mes = 5;

switch ($mes) {
    case 1:
        echo "Fevereiro";
        break;
    case 2:
        echo "Janeiro";
        break;
    case 3:
        echo "Março";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Maio";
        break;
    case 6:
        echo "Junho";
        break;
    case 7:
        echo "Julho";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Setembro";
        break;
    case 10:
        echo "Outubro";
        break;
    case 11:
        echo "Novembro";
        break;
    case 12:
        echo "Dezembro";
        break;  

    default:
        Echo "Escolha um número entre 1 e 12!";
        break;
}


?>