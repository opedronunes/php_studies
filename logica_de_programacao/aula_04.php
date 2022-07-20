<?php
/**
 * Escreva um programa que leia o código de um determinado produto e mostre a sua descrição.
 * Utilize a tabela abaixo como referência:
 * Código Descrição
 * 1 Alimento não-perecível
 * 2 Alimento perecível
 * 3 Vestuário
 * 4 Limpeza
 * 5 Celulares
 * 6 Informática
 * 7 Móveis
 * 8 Outros
*/

echo "elseif\n <br>";

$codigo = 1;

if ($codigo == 1) {
    echo $codigo." - Alimento não perecível.";
}elseif($codigo == 2){
    echo $codigo." - Alimento perecível.";
}elseif($codigo == 3){
    echo $codigo." - Vestuário.";
}elseif($codigo == 4){
    echo $codigo." - Limpeza.";
}elseif($codigo == 5){
    echo $codigo." - Celulares.";
}elseif($codigo == 6){
    echo $codigo." - Informática.";
}elseif($codigo == 7){
    echo $codigo." - Móveis.";
}else{
    echo $codigo." - Outros.";
}

echo "<br>\n---------------------\n <br>";

echo "Switch case\n <br>";

$codigo = 5;

switch ($codigo) {
    case 1:
        echo $codigo." - Alimento não perecível.";
        break;
    
    case 2:
        echo $codigo." - Alimento perecível.";
        break;
    
    case 3:
        echo $codigo." - Vestuário.";
        break;
            
    case 4:
        echo $codigo." - Limpeza.";
        break;

    case 5:
        echo $codigo." - Celulares.";
        break;

    case 6:
        echo $codigo." - Informática.";
        break;

    case 7:
        echo $codigo." - Móveis.";
        break;

    case 8:
        echo $codigo." - Outros.";
        break;

        default:
        echo "Não identificado!";
        
        break;
    }
    
echo "<br>\n---------------------\n<br>";
/**
 * Crie um programa que lê o conceito de um aluno na disciplina (Introdução à
 * Programação) e imprime seu significado, de acordo com a tabela abaixo.
 * Caso seja informado um conceito inexistente, deve ser exibida uma mensagem de erro.
 * Conceito Significado:
 * A Excelente
 * B Ótimo
 * C Bom
 * D Regular
 * E Ruim
*/

$conceito = "a";

if ($conceito == "A" or "a") {
    echo $conceito." - Excelente.";
}elseif($conceito == "B"){
    echo $conceito." - Ótimo.";
}elseif($conceito == "C"){
    echo $conceito." - Bom.";
}elseif($conceito == "D"){
    echo $conceito. " - Regular.";
}elseif($conceito == "E"){
    echo $conceito." - Ruim.";
}else{
    echo "Não identificamos o conceito.";
}

echo "<br>\n---------------------\n<br>";

/**
 * Escreva um programa que receba o mês e indique o número de dias existentes no mês informado.
 * Número de dias Mês, Mês
 * 28 - 02
 * 30 - 04, 06, 09, 11
 * 31 - 01, 03, 05, 07, 08, 10, 12
 */

$mes = 9;

 switch ($mes) {
    case 2:
        echo "Mês ".$mes." tem 28 dias";
        break;
    
    case 4:
    case 6:
    case 9:
    case 11:
        echo "Mês ".$mes." tem 30 dias";
        break;
    
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "Mês ".$mes." tem 31 dias";
        break;

    default:
        echo "Não identifiquei o número do mês!!!";
        break;
 }
?>