/*
Faça um programa que leia três valores e apresente o maior dos três valores lidos seguido 
da mensagem “eh o maior”. Utilize a fórmula:



Obs.: a fórmula apenas calcula o maior entre os dois primeiros (a e b). Um segundo passo, 
portanto é necessário para chegar no resultado esperado.

Entrada
O arquivo de entrada contém três valores inteiros.

Saída
Imprima o maior dos três valores seguido por um espaço e a mensagem "eh o maior".
*/
<?php
$val = explode(" ", fgets(STDIN));

$maiorAB = ($val[0] + $val[1] + abs($val[0] - $val[1])) / 2;
$maior = ($maiorAB + $val[2] + abs($maiorAB - $val[2])) / 2;
    
echo "$maior eh o maior\n";
?>
