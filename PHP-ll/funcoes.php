<?php

function sacar($conta, float $valorASacar){
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("você não pode sacar");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array{
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    }else{
        echo "depositos precisam ser positivos";
    }
    return $conta;
}

function exibeMensagem(string $mensagem): void { //não retorna nada
    echo $mensagem.PHP_EOL;
}