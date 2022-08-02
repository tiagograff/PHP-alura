<?php
$alunos2021 = [
    'ana',
    'joao',
    'maria',
    'roberto',
    'vinicius' 
];

$novosAlunos = [
    'patricia',
    'nico',
    'kilderson',
    'daiane' 
];



//$alunos2022 = array_merge($alunos2021, $novosAlunos); //unir arrays não preserva as chaves
$alunos2022 = [...$alunos2021,'carlos', ...$novosAlunos]; ///desempacota arrays 

var_dump($alunos2022);

funcao (...[1,2,3]);

function funcao (int $a, int $b, int $c)
{

}