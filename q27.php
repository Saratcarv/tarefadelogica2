<?php
/*Uma turma possui 12 alunos. Para cada aluno, solicite a quantidade de faltas durante o semestre. 
Utilize for e condicionais para informar se o aluno está dentro do limite de faltas (até 15 faltas) ou acima do limite. 
Ao final, informe quantos alunos ultrapassaram o limite.*/


$u = 0;

for ($i = 1; $i <= 12; $i++) {
    $f = (int) readline("Digite a quantidade de faltas do aluno $i: ");
    if ($f > 15) {
        $u++;
    }
}

echo "Quantidade de alunos que ultrapassaram o limite de faltas: $u\n";

?>