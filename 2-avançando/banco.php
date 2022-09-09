<?php

//include 'funcoes.php'; //inclui outro arquivo (quando n é obrigatório)
//require 'funcoes.php';
require_once 'funcoes.php'; //n inclui novamente caso já tenha incluído

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

unset($contasCorrentes['123.256.789-10']); //remove itens de uma lista

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

//para cada uma das contas correntes chamando-as de conta
foreach($contasCorrentes as $cpf => $conta){
//                     chave    valor
    //atribuindo aos índices as variáveis
   // list('titular' => $titular, 'saldo' => $saldo) = $conta;
   exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}