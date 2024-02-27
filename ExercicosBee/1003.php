/*
Leia dois valores inteiros, no caso para variáveis A e B. A seguir, calcule a soma entre 
elas e atribua à variável SOMA. A seguir escrever o valor desta variável.

Entrada
O arquivo de entrada contém 2 valores inteiros.

Saída
Imprima a mensagem "SOMA" com todas as letras maiúsculas, com um espaço em 
branco antes e depois da igualdade seguido pelo valor correspondente à soma de A e B. 
Como todos os problemas, não esqueça de imprimir o fim de linha após o resultado, 
caso contrário, você receberá "Presentation Error". 
*/

<?php

$V1 = fgets(STDIN);
$V2 = fgets(STDIN);

$S = $V1 + $V2;

echo "SOMA = $S" . PHP_EOL;

?>