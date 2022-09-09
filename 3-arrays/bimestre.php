<?php
$notasBimestre1 = [
    'ana'      => 7,
    'joao'     => 8,
    'maria'    => 9,
    'roberto'  => 10,
    'vinicius' => 6
];

$notasBimestre2 = [
    'ana'      => 7,
    'joao'     => 8,
    'maria'    => 9,
    'vinicius'  => 10,
];
//elementos 1 que não estão em 2
var_dump(array_diff($notasBimestre1,$notasBimestre2)); //a diferença entre os arrays (valor)
var_dump(array_diff_key($notasBimestre1,$notasBimestre2)); //a diferença entre os arrays (chaves)
var_dump(array_diff_assoc($notasBimestre1,$notasBimestre2)); //a diferença entre os arrays (ambos)

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomeAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_keys($alunosFaltantes));
var_dump(array_values($alunosFaltantes)); //valor

var_dump(array_combine($notasAlunos, $nomeAlunos)); //precisa ser do mesmo tamanho
var_dump(array_flip($alunosFaltantes)); //inverte o que é valor vira chave, e chave vira valor