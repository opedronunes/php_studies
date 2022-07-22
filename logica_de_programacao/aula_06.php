<?php
$num1 = 2;
$num2 = 4;
$num3 = 5;

$resultado;

//Operador de soma

echo "Operador de soma\n";
echo $resultado = $num1 + $num2;
echo "\n";

//Operador de subtração
echo "Operador de subtração\n";
echo $resultado = $num2 - $num1;
echo "\n";

//Operador de multiplicação
echo "Operador de multiplicação\n";
echo $resultado = $num1 * $num2;
echo "\n";

//Operador de divisão
echo "Operador de divisão\n";
echo $resultado = $num2 / $num1;
echo "\n";

//Resto da divisão
echo "Resto da divisão\n";
echo $resultado = $num3 % $num1;
echo "\n";

//Operador de incremento
echo "Operador de incremento\n";
$num1++;
echo $num1;
echo "\n";

//Operador de decremento
echo "Operador de decremento\n";
unset($num1);
$num1 = 2;
$num1--;
echo $num1;
echo "\n";

//Operador de comparação
$num4 = 2;
echo "Operador de comparação '=='\n";
if ($num4 == $num2) {
    echo "São iguais.";
}else{
    echo "São diferentes.";
}
echo "\n";

echo "Operador de comparação '!='\n";
if ($num4 != $num2) {
    echo "São iguais.";
}else{
    echo "São diferentes.";
}
echo "\n";

echo "Operador de comparação '>'\n";
if ($num4 > $num2) {
    echo $num4." É maior.";
}else{
    echo $num4." É menor.";
}
echo "\n";

echo "Operador de comparação '>='\n";
if ($num4 >= $num1) {
    echo $num4." É igual.";
}else{
    echo $num4." É menor.";
}
echo "\n";

echo "Operador de comparação '<='\n";
if ($num4 <= $num1) {
    echo $num4." É igual.";
}else{
    echo $num4." É menor.";
}
echo "\n";

echo "Operador lógico '&&' e 'and'\n";
if (($num4 > $num1) && ($num1 < $num2)) {
    echo "As duas são verdadeiras";
}else{
    echo "As duas são falsas";
}
echo "\n";

echo "Operador lógico '||' e 'or'\n";
if (($num4 > $num1) || ($num1 > $num2)) {
    echo "As duas são verdadeiras";
}else{
    echo "As duas são falsas";
}
echo "\n";

echo "Operador lógico '!'\n";
if (($num4 > $num1) && !($num1 < $num2)) {
    echo "As duas são verdadeiras";
}else{
    echo "As duas são falsas";
}
echo "\n";

?>