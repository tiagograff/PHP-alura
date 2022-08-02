<?php
// $dados = ['vinicius',19,24];
// list($nome, $nota, $idade) = $dados; //atribui significados
// var_dump($nome, $nota, $idade);
//ou
$dados = [
    'nome'  => 'vinicius',
    'nota'  => 10,
    'idade' => 24
];

list('nome'=> $nome, 'nota' => $nota, 'idade' => $idade) = $dados;
var_dump($nome, $nota, $idade);