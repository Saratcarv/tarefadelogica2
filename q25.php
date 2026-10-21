<?php
/*Análise de temperaturas: Uma estação meteorológica precisa registrar as temperaturas de sete dias. 
Crie um programa que solicite as temperaturas, calcule e apresente a 
temperatura média e a maior temperatura registrada, utilizando for para realizar as leituras.*/

$te = 0;
$maior = PHP_FLOAT_MIN;

for ($i = 1; $i <= 7; $i++) {
    $t = (float) readline("Digite a temperatura do dia $i: ");
    $te += $t;
    if ($t > $maior) {
        $maior = $t;
    }
}
$media = $te / 7;

echo "A temperatura média é: $media\n";
echo "A maior temperatura registrada é: $maior\n";

?>