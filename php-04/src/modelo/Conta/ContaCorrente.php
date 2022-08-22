<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transferi(float $valorATransferir, Conta $contaDestino): void 
    {
        if($valorATransferir > $this->saldo){
            echo "saldo indisponivel";
        }else{
            $this->saca($valorATransferir);
            $contaDestino->deposita($valorATransferir);
        }
    }


}