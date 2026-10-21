<?php
/*[NIVEL INTERMEDIÁRIO] Uma empresa está desenvolvendo um sistema de Inteligência Artificial para analisar os resultados de testes realizados por diferentes modelos de IA. 
Desenvolva um programa em PHP que solicite ao usuário a quantidade de modelos de IA que serão avaliados e a quantidade de testes realizados por cada modelo. Utilize dois laços de repetição for encadeados para solicitar a nota de desempenho de cada modelo em cada teste, considerando valores de 0 a 100. Utilize estruturas condicionais para classificar cada resultado como baixo (menor que 50), moderado (de 50 a 79) ou alto (igual ou superior a 80). 
Ao final, apresente a média das notas de cada modelo e informe qual modelo obteve a maior média de desempenho.*/


$m = (int) readline("Quantidade de modelos: ");
$t = (int) readline("Quantidade de testes por modelo: ");

$mm = -1;
$id = 0;

for ($i = 1; $i <= $m; $i++) {
    $s = 0;
    echo "\n--- Modelo $i ---\n";
    
    for ($j = 1; $j <= $t; $j++) {
        $n = (float) readline("Nota do teste $j (0-100): ");
        $s += $n;

        if ($n >= 80) {
            $c = "Alto";
        } elseif ($n >= 50) {
            $c = "Moderado";
        } else {
            $c = "Baixo";
        }
        echo "Resultado: $c\n";
    }

    $med = $s / $t;
    echo "Media do Modelo $i: " . number_format($med, 2, ',', '.') . "\n";

    if ($med > $mm) {
        $mm = $med;
        $id = $i;
    }
}

echo "\nModelo com maior media: Modelo $id (" . number_format($mm, 2, ',', '.') . ")\n";

?>