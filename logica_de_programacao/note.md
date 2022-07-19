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