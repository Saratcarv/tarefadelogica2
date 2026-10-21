<?php
/*Fatorial: Desenvolva um programa que solicite um número 
inteiro não negativo ao usuário e calcule seu fatorial utilizando a estrutura for.*/

$n = (int) readline("Digite um número inteiro não negativo: ");

if ($n < 0) {
    echo "Número inválido! Digite um valor maior ou igual a 0.";
}
else {
    $f = 1;

    for ($i = 2; $i <= $n; $i++) {
        $f *= $i;
    }
    echo "O fatorial de $n é: $f";
}

?>