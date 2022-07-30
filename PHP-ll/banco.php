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

function exibeMensagem(string $mensagem) {
    echo $mensagem.PHP_EOL;
}

$contasCorrentes = [
//  cpf (chave)
    '123.456.789-10' => [ 
//  valor
        'titular' => 'tiago',
        'saldo'   => 1000
    ],
    '123.456.789-11' => [ 
        'titular' => 'vinicius',
        'saldo'   => 10000
    ],
    '123.256.789-10' => [
        'titular' => 'maria',
        'saldo'   => 1500
    ]
];

$contasCorrentes['123.256.789-10'] = sacar($contasCorrentes['123.256.789-10'], 500);

$contasCorrentes['123.456.789-11'] = depositar($contasCorrentes['123.456.789-11'],900);

//para cada uma das contas correntes chamando-as de conta
foreach($contasCorrentes as $cpf => $conta){
    //                     chave    valor
   exibeMensagem($cpf." ".$conta['titular']." ".$conta['saldo']);
}