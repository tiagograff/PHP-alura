<?php
$notas = [
[   'aluno'=> 'Maria',
    'nota' => 10,
],
[
    'aluno'=>'Vinicius',
    'nota' =>6,
],
[
    'aluno'=>'Ana',
    'nota' =>9,
]
];

function ordenaNotas(array $nota1, array $nota2): int{
    // if ($nota1['nota'] > $nota2['nota']){
    //     return -1;
    // }
    // if($nota1['nota'] > $nota2['nota']){
    //     return 1;
    // }
    // return 0;
    return $nota2['nota'] <=> $nota1['nota']; //mesma coisa que o código acima
}
//    array a ordenar - função que vai ordenar
usort($notas, 'ordenaNotas'); // função de comparação definida pelo o usuário
// sort = ordenar - modifica a variável
var_dump($notas); 