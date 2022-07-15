<?php

$nome1 = 'Pedro';
$nome2 = 'Manuela';
$nome3 = 'Ludi';

if ($nome1 == $nome2) {
    echo 'Os nome são iguais!';
}else{
    echo 'Os nome são diferentes!';
}

echo '<hr>';

$nota1 = 5;
$nota2 = 6;
$nota3 = 5;

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media < 4) {
    echo 'Aluno reprovado! Média: '.round($media, 2);
}elseif($media >= 4 && $media < 6){
    echo 'Aluno em recuperação! Média: '.round($media, 2); 
}else{
    echo 'Aluno aprovado! Média: '.round($media, 2);
}

?>