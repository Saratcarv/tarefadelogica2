<?php
/*Uma loja virtual precisa calcular o frete de oito pedidos. Para cada pedido, solicite o valor da compra. 
Utilize for e condicionais para definir frete grátis para compras a partir de R$ 300,00, frete de R$ 15,00 
para compras a partir de R$ 150,00 e inferiores a R$ 300,00, e frete de R$ 25,00 para compras abaixo de R$ 150,00. 
Apresente o valor do frete de cada pedido.*/


for ($i = 1; $i <= 8; $i++) {
    $v = (float) readline("Valor do pedido $i: ");

    if ($v >= 300) {
        $f = 0;
    } elseif ($v >= 150) {
        $f = 15;
    } else {
        $f = 25;
    }

    if ($f == 0) {
        echo "Pedido $i - Frete: Gratis\n";
    } else {
        echo "Pedido $i - Frete: R$ " . number_format($f, 2, ',', '.') . "\n";
    }
}


?>
