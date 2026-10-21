<?php
/*Média de notas: Crie um programa que solicite as notas de cinco alunos, 
calcule a média da turma e apresente o resultado ao final, utilizando for para repetir a entrada das notas.*/

$s = 0;

for ($i = 1; $i <=5; $i++) {
    $n = (float) readline("Digite a nota do aluno $i: ");
    $s += $n;
}

echo "A média das notas é: " . ($s / 5);

?>