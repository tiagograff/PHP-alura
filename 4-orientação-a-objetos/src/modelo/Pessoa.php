<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedade; //utilizando um trait
    
    protected string $nome; //dentro da classe e classes filhas é possivel acessa-lo
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {   
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf  = $cpf;   
    }
    
    //getters
    public function recuperaNome(): string
    {
        return $this->nome;
    }
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }
    
    final protected function validaNomeTitular(string $nomeTitular) //não pode sobrescrever este método
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}