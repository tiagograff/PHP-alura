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
array_push($alunos2022,'alice','bob','charli'); //adcionar novos elementos
$alunos2022[] = 'luiz'; //adcionando um
array_unshift($alunos2022,'stephane','rafaela'); //adiona no inicio
echo array_shift($alunos2022).PHP_EOL; //move o primeiro elemento
array_pop($alunos2022).PHP_EOL; //último elemento

var_dump($alunos2022);