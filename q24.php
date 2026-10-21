<?php
/*Sequência numérica: Desenvolva um programa que solicite um número inteiro positivo ao usuário e exiba uma sequência começando em 0 até esse número, avançando de 2 em 2.*/

$l = (int) readline("Digite um valor inteiro positivo: ");
    if ($l < 0) {
        echo "Número inválido! Digite um valor maior ou igual a 0.";
    }
    else {
        echo "A sequência de 0 até $l, avançando de 2 em 2, é: ";
        for ($i = 0; $i <= $l; $i += 2) {
            echo "$i ";
        }
    }

?>