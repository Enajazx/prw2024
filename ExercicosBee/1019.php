/*
Leia um valor inteiro, que é o tempo de duração em segundos de um determinado evento
 em uma fábrica, e informe-o expresso no formato horas:minutos:segundos.

Entrada
O arquivo de entrada contém um valor inteiro N.

Saída
Imprima o tempo lido no arquivo de entrada (segundos), convertido para horas:minutos:
segundos, conforme exemplo fornecido.
*/

<?php
$t= intval(fgets(STDIN));
$h = array(0, 0, 0);

while($t > 0) {
    switch($t) {
        case $t < 60:
            $h[2] = $t;
            $t = 0;
        break;
        case $t < 3600:
            $h[1] = (int) ($t / 60);
            $t %= 60;
        break;
        default:
            $h[0] = (int) ($t / 3600);
            $t %= 3600;
    }
}

echo $h[0] . ":" . $h[1] . ":" . $h[2] . "\n";
?>