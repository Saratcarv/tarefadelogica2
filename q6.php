
<?php
$s = 1234;
$senha = readline("Digite a senha: ");

while ($senha != $s) {
    echo "Senha incorreta!" . PHP_EOL;
    $senha = readline("Digite novamente: ");
}

echo "Acesso permitido!";
?>
