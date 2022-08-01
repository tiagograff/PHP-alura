<?php
$notas = [
    'ana'      => null,
    'joao'     => 8,
    'maria'    => 9,
    'roberto'  => 10,
    'vinicius' => 6
];

arsort($notas); //mantem a chaves
//asort
ksort($notas); //ordena pela chaves
//krsort
rsort($notas);//reverse de sort
var_dump($notas);

if(is_array($notas)){//descobre se é um array
    echo 'sim é um array'.PHP_EOL;
}

var_dump(array_is_list($notas)).PHP_EOL; //se for numérico

var_dump(array_key_exists('vinicius',$notas)); //veridicar se uma chave existe
var_dump(isset($notas['ana'])); //verifica se é null

var_dump(in_array(10, $notas)); //verifica se o valor existe

echo array_search(10, $notas); //retorna a chave com o valor 10
echo array_search(10, $notas);