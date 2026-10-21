<?php
/*Estoque de produtos: Uma loja precisa registrar a quantidade de unidades vendidas de um produto durante cinco dias. 
Desenvolva um programa que solicite as quantidades vendidas diariamente 
e apresente o total de unidades vendidas no período.*/

$t = 0;

for ($i = 1; $i <= 5; $i++) {
    $q = (int) readline("Unidades vendidas no dia $i: ");
    $t += $q;
}

echo "O total de unidades vendidas na semana é: $t";

?>