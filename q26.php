<?php
/* Crie um programa que percorra os números de 1 até 50 utilizando for. 
Dentro da repetição, identifique os números pares e ímpares com condicionais. 
Ao final, apresente a soma de todos os números pares e a soma de todos os números ímpares.*/


$p = 0;
$im = 0;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $p += $i;
    } else {
        $im += $i;
    }
}

echo "A soma dos números pares é: $p\n";
echo "A soma dos números ímpares é: $im\n";

?>