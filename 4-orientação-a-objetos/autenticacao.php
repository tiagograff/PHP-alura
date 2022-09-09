<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Servico\Autenticador;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente(
    'umNome',
    new Cpf('000.000.000-00'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');