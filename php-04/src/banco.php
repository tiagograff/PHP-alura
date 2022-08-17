<?php
require_once 'Conta.php';

$primeiraConta = new Conta('123.456.789-10','tiago'); //parametros do método contrutor

$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo $primeiraConta->recuperaSaldo().PHP_EOL;

$segundaConta = new Conta('698.549.548-10', 'patricia');
var_dump($segundaConta);

$outra = new Conta('123', 'abcdefg');
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();