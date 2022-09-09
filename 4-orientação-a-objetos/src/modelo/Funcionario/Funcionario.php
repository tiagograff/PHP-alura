<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;

 abstract class Funcionario extends Pessoa
 {
    private float $salario;
 
    public function __construct (string $nome, Cpf $cpf, float $salario)
    {
       parent::__construct($nome, $cpf);
       $this->salario = $salario;
    }

    //getter
    public function recuperaSalario():float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento)
    {
        if ($valorAumento < 0)
        {
            echo "aumento deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao():float; //todo o funcionário terá esse método

}

