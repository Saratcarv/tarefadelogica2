<?php
/*Soma dos números: Crie um programa que utilize for para calcular e exibir a soma de todos os números inteiros de 1 até 100.
*/


$s = 0;

for ($i = 1; $i <= 100; $i++) {
    $s += $i;
}

echo "A soma de 1 a 100 é: " . $s;

?>