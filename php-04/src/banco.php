<?php
require_once 'Conta.php';

$primeiraConta = new Conta();
$primeiraConta->defineCpfTitular('123.456.789-10');
$primeiraConta->defineNomeTitular('tiago pinz');
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular();
echo $primeiraConta->recuperarCpfTitular();
echo $primeiraConta->recuperarSaldo();
