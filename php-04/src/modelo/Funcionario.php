<?php

namespace Alura\Banco\Modelo;

 class Funcionario extends Pessoa
 {
    private string $cargo;
    private float $salario;
 
    public function __construct (string $nome, Cpf $cpf, string $cargo, float $salario)
    {
       parent::__construct($nome, $cpf);
       $this->cargo = $cargo;   
       $this->salario = $salario;
    }

    //getter
    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function recuperaSalario():float
    {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        if ($this->cargo === 'Gerente')
        { 
        return $this->salario;
        }
        return $this->salario * 0.1;
    }

}

