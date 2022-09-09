<?php

use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca, ContaCorrente};
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'vinicius dias', 
        new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
    ), 2
);

$conta->deposita(500);

$conta->saca(100);

echo $conta->recuperaSaldo().PHP_EOL;

$conta2 = new ContaPoupanca(
    new Titular(
        new CPF('123.456.987-10'),
        'tiago', 
        new Endereco('cidade', 'bairro', 'rua', 'nro')
    ), 2
);
$conta2->deposita(500);
$conta2->saca(100);
echo $conta2->recuperaSaldo().PHP_EOL;