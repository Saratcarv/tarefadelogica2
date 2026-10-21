<?php
/*Desenvolva um programa em PHP que solicite ao usuário o valor que deseja sacar em um caixa eletrônico. O caixa possui apenas notas de R$ 2,00 e R$ 10,00. 
Utilize a estrutura de repetição for e estruturas condicionais para calcular quantas notas de cada valor serão necessárias para entregar a quantia solicitada. 
O programa deve informar a quantidade de notas de R$ 10,00 e de R$ 2,00 utilizadas. 
Caso não seja possível formar o valor solicitado com as notas disponíveis, apresente uma mensagem informando que o saque não pode ser realizado com o valor exato.*/


echo "Valor do saque: ";
$v = (int) readline();

$n10 = 0;
$n2 = 0;
$p = false;

for ($i = (int)($v / 10); $i >= 0; $i--) {
    $r = $v - ($i * 10);
    if ($r % 2 == 0) {
        $n10 = $i;
        $n2 = $r / 2;
        $p = true;
        break;
    }
}

if ($p) {
    echo "Notas de R$ 10,00: $n10\n";
    echo "Notas de R$ 2,00: $n2\n";
} else {
    echo "Saque nao pode ser realizado com o valor exato.\n";
}


?>