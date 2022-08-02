<?php
//array associativo
$conta1 = [ 'titular'  => 'tiago',
            'saldo' => 1000
]; //define os índices - associando
$conta2 = [ 'titular'  => 'vinicius',
            'saldo' => 10000
];
$conta3 = [ 'titular'  => 'maria',
            'saldo' => 300
];

$contasCorrentes = [$conta1,$conta2,$conta3];

for ($i=0; $i < count($contasCorrentes); $i++) { 
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
}