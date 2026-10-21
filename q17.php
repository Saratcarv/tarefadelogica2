<?php
/*Múltiplos de um número: Escreva um programa que solicite um número ao usuário e exiba os dez primeiros múltiplos positivos desse número utilizando for.*/

$n = (int)readline("Digite um número: ");

echo "Os 10 primeiros multiplos de $n são: ";
for ($i = 1; $i <= 10; $i++) {
    echo ($n * $i) . " ";
}

?>