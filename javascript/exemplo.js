// 1 - exemplo de Comentário, apenas um alinha.
/**
 * 2 - exemplo de comentário, com mais de uma linha.
 */


console.log("Olá Mundo!");
console.log("Olá Mundo! 2");
console.log(1 + 2);

var preco = 20;
let peso = 1.5;
let resultado = preco * peso;

console.log("Preco: " +preco+ " x Peso: "+peso+ " = Resultado = "+resultado);
console.log(preco);
console.log(peso);
console.log(resultado);

let nome = "Pedro";

console.log(nome.charAt(0));
console.log(nome.substring(0, 3));
console.log("Nome: ".concat(nome));
console.log(nome.replace('P', 'f'));

//Array
const valor = [
    18, 25, 42, 55
];
console.log(valor[1], valor[3]);
console.log(valor[4]);
valor[4] = 67;
console.log(valor[4]);
console.log(valor.length);