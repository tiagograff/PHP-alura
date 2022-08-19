<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Pessoa;

$endereco1 =  new Endereco('galáxia', 'andromedra', 'algum lugar','alguma rua');
$tiago = new Titular(new CPF('123.456.789-10'), 'tiago', $endereco1);
$primeiraConta = new Conta($tiago);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo $primeiraConta->recuperaSaldo().PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'vinicius',new Endereco('galáxia', 'via', 'algum lugar','alguma rua') );
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'abcdefg',new Endereco('galáxia', 'lactea', 'algum lugar','alguma rua')));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();