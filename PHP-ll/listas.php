<?php
//arrays numéricos
$idadeList = [21,23,19,25,30,41,10]; //índices
$primeiraIdade = $idadeList[0];
echo $primeiraIdade;

//adcionando
$idadeList[] = 20;
foreach($idadeList as $idade){
    echo $idade.PHP_EOL;
}