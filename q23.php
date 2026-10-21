<?php
/*Números divisíveis: Crie um programa que exiba todos os números entre 1 e 100 que 
sejam divisíveis por 3, utilizando a estrutura for.*/

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . " ";
    }
}


?>