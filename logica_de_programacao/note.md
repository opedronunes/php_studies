## O que é lógica de programação?<br>
É o campo de estudo que utiliza princípios e conhecimentos para se atingir um reciocínio correto. Ou seja, 
nada mais é que a criação de um script para realizar uma atividade do início ao fim.<br>
Primeiramento, devemos analisar a situação, levantar quais questões devem ser resolvidas, estudar as soluções 
possíveis e planejar todas as etapas da solução.

## Programação
São softwares que, a partir de linguagens de programação, como Java, Python, Swift, são utilizados para desenvolvimento de outros programas.<br>

## Algoritmos
è por meio do Algoritmo que os softwares são desenvolvidos, descrevendo uma sequência de passos lógicos para execuçao de uma terefa que consiste em:<br>
- Entrada de informações -> Precessamento dessas informações -> Saída ou resultado

## Variáveis

- $variável: recebe um valor que pode mudar, podendo ser no formato string, inteiro, float...
```
$peso = 10;
$nome = 'aula';
```
- Contante: que não altera o valor, sendo ele fixo.
```
const valorLimite = 50;
```

## Funções

- isset: possibilita a verificação de algum valor atribuido a uma variável.
- unset: limpa o valor de uma variável.

```
$valorLimite = 50;

//unset($valorLimite);

if (isset($valorLimite)) {
    echo "Valor alocado!";
}else{
    echo "Valor Nulo!";
}
```

## Condicionais

- Comando<br>
if - Verifica se uma condiçao é verdadeira.<br>
```
if($nome1 == $nome2){
    echo 'Os nomes são iguais!';
}
```
- Comando <br>
else - Caso condição do if não retorne verdadeiro, o esle retorna falso.
```
if($nome1 == $nome2){
    echo 'Os nomes são iguais!';
}else{
    echo 'Os nomes são diferentes';
}

```
- Comando <br>
elseif - adiciona mais uma condição, verificando se não se corresponder a outra condição.
```
if ($media < 4) {
    echo 'Aluno reprovado!';
}elseif($media >= 4 && $media < 6){
    echo 'Aluno em recuperação!'; 
}else{
    echo 'Aluno aprovado!';
}

```
- Comando <br>
SwitchCase - Muito utilizado quando houver uma quantidade maior de verificações.
```
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
```
- Comando <br>
for - É a estrutura de repetição que utilizamos quando sabemos a quantidade de repetições que devem se executadas.
```
for ($i=1; $i <= 10; $i++) { 
    echo $i." Seja bem vindo!\n";
}
```

- Comando Do While <br>
do while - Utilizado quando não sabemos a quntidade da contagem, portanto o loop roda até achar o valor.
```
$a = 1;

while ($a <= 10) {
    echo "Bem vindo \n";
    $a++;
}
```
- Comando <br>
Do while - a diferença é a verificação que ocorre primeiro no comando e depois ocorre a repetição.
```
do {
    echo "Seja bem vindo do while.\n";
    $b++;
} while ($b <= 10);
```