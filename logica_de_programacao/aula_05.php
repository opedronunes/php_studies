<?php

for ($i=1; $i <= 10; $i++) { 
    echo $i." Seja bem vindo!\n";
}

echo "\n---------------\n";

for ($i=0; $i <= 10; $i++) { 
    echo "2 x ".$i." = ".$i * 2 ."\n";
}

echo "\n---------------\n";


$vetor = array(1, 2, 3, 4, 5);
for($i = 0; $i < 5; $i++)
{
    $item = $vetor[$i];
    echo $item;
}

echo "\n---------------\n";

$a = 1;

while ($a <= 10) {
    echo "Bem vindo while.\n";
    $a++;
}

echo "\n---------------\n";

$b = 1;

do {
    echo "Seja bem vindo do while.\n";
    $b++;
} while ($b <= 10);

echo "\n---------------\n";

$b = 10;

do {
    echo "Contagem regressiva: {$b}\n";
    $b--;
} while ($b >= 1);

echo "\n---------------\n";

$vetor = array(1, 2, 3, 4, 5);
foreach($vetor as $item)
{
    echo $item;
}

?>