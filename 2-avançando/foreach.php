<?php
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
        'saldo'   => 300
    ]
];

//adcionando um novo valor
$contasCorrentes['123.456.378-11'] = [
    'titular' => 'claudia',
    'saldos'  => 2000
];

//para cada uma das contas correntes chamando-as de conta
foreach($contasCorrentes as $cpf => $conta){
    //                     chave    valor
    echo $cpf." ".$conta['titular'].PHP_EOL;
}