<?php
//arrays numéricos
$idadeList = [21,23,19,25,30,41,10]; //índices
$primeiraIdade = $idadeList[0];
echo $primeiraIdade;


list($idadeTiago, $idadeViniciuis, $IdadeMaria)=$idadeList;
//vai atribui os valores

//adcionando
$idadeList[] = 20;
foreach($idadeList as $idade){
    echo $idade.PHP_EOL;
}