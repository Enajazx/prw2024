/* 
Neste problema, deve-se ler o código de uma peça 1, o número de peças 1, o valor unitário de 
cada peça 1, o código de uma peça 2, o número de peças 2 e o valor unitário de cada peça 2.
 Após, calcule e mostre o valor a ser pago.

Entrada
O arquivo de entrada contém duas linhas de dados. Em cada linha haverá 3 valores, 
respectivamente dois inteiros e um valor com 2 casas decimais.

Saída
A saída deverá ser uma mensagem conforme o exemplo fornecido abaixo, lembrando de deixar
 um espaço após os dois pontos e um espaço após o "R$". O valor deverá ser apresentado com 
 2 casas após o ponto.
*/

<?php

$valor1 = explode(" ", fgets(STDIN));
$valor2 = explode(" ", fgets(STDIN));

$totalv1 = $valor1[1] * $valor1[2];
$totalv2 = $valor2[1] * $valor2[2];

$totalv = number_format(round($totalv2 + $totalv1, 2, PHP_ROUND_HALF_EVEN), 2,'.','');

echo "VALOR A PAGAR: R$ $totalv\n"

?>