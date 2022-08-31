<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Cpf};
use Alura\Banco\Modelo\Funcionario\{Gerente, Funcionario, Diretor, Desenvolvedor};
use Alura\Banco\Servico\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor('teste',new CPF('000.000.000-00'),'Funcionario',3000);

$umFuncionario->sobeDeNivel();
$doisFuncionario = new Gerente('teste2',new Cpf('111.111.111-11'),'Gerente',1000);
$tresFuncionario = new Diretor('teste2',new Cpf('111.111.111-11'),'Diretor',2000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacoes($umFuncionario);
$controlador->adicionaBonificacoes($doisFuncionario);
$controlador->adicionaBonificacoes($tresFuncionario);

echo $controlador->recuperaTotalBonificacoes();