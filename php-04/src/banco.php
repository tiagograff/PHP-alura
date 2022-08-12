<?php
require_once 'Conta.php';

$primeiraConta = new Conta('123.456.789-10','tiago'); //parametros do método contrutor

$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo $primeiraConta->recuperaSaldo().PHP_EOL;

$segundaConta = new Conta('987.654.321-98','ana');

echo $segundaConta->recuperaNomeTitular().PHP_EOL;
echo $segundaConta->recuperaCpfTitular().PHP_EOL;
echo $segundaConta->recuperaSaldo().PHP_EOL;

echo Conta::recuperaNumeroDeContas();