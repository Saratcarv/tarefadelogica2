<?php
/*Consumo de água: Uma residência deseja registrar o consumo diário de água durante sete dias. 
Crie um programa que solicite o consumo de cada dia em litros e, ao final, apresente o consumo total 
utilizando for.*/

$t = 0;

for ($i = 1; $i <= 7; $i++) {
    $l = (float) readline("Consumo do dia $i (litros): ");
    $t += $l;
}

echo "O consumo total na semana é: $t litros";

?>