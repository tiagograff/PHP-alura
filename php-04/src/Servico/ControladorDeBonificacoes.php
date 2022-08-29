<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacoes(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    //getters
    public function recuperaTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}