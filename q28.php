<?php
/*Uma cooperativa precisa avaliar a qualidade de 10 lotes de frutas. Para cada lote, solicite o peso médio de uma fruta em gramas. 
Utilize for e condicionais para classificar os lotes como pequenos (menos de 100 g), médios (de 100 g a 200 g) ou grandes (mais de 200 g). 
Ao final, contabilize quantos lotes pertencem a cada categoria.*/

$p = 0;
$m = 0;
$g = 0;

for ($i = 1; $i <= 10; $i++) {
    $p = (float) readline("Informe o peso médio de uma fruta no lote $i (em gramas): ");

    if ($p < 100) {
        $p++;
    } elseif ($p >= 100 && $p <= 200) {
        $m++;
    } else {
        $g++;
    }
}

echo "Quantidade de lotes pequenos: $p\n";
echo "Quantidade de lotes médios: $m\n";
echo "Quantidade de lotes grandes: $g\n";



?>