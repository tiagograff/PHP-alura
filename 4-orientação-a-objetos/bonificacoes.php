<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Cpf};
use Alura\Banco\Modelo\Funcionario\{Gerente, Funcionario, Diretor, Desenvolvedor, EditorVideo};
use Alura\Banco\Servico\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor('teste',new CPF('000.000.000-00'),1000);

$umFuncionario->sobeDeNivel();
$doisFuncionario = new Gerente('teste2',new Cpf('222.222.222-22'),3000);
$tresFuncionario = new Diretor('teste3',new Cpf('333.333.333-33'),5000);
$quatroFuncionario = new EditorVideo('teste4',new Cpf('444.444.444-44'),3500);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacoes($umFuncionario);
$controlador->adicionaBonificacoes($doisFuncionario);
$controlador->adicionaBonificacoes($tresFuncionario);
$controlador->adicionaBonificacoes($quatroFuncionario);

echo $controlador->recuperaTotalBonificacoes();