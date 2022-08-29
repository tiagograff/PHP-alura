<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Funcionario, Cpf};
use Alura\Banco\Servico\ControladorDeBonificacoes;

$umFuncionario = new Funcionario('tiago', new Cpf('123.456.789-10'),'programador',1000.00);
$doisFuncionario = new Funcionario('patricia', new Cpf('987.456.789-10'),'Gerente',3000.00);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacoes($umFuncionario);
$controlador->adicionaBonificacoes($doisFuncionario);

echo $controlador->recuperaTotalBonificacoes();