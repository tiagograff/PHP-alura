<?php

namespace Alura\Banco\Modelo;

 class Funcionario extends Pessoa
 {
    private string $cargo;
 
    public function __construct (string $nome, Cpf $cpf, string $cargo)
    {
       parent::__construct($nome, $cpf);
       $this->cargo = $cargo;   
    }


    //getter
    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

}

