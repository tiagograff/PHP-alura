<?php
$array = [
    1   => 'a',
    '1' => 'b', //sobrescreve pq é convertido p numérico
    1.5 => 'c', //convertido p inteiro e é sobrescrito
    true => 'd' //sobrescrito para 1
];
foreach ($array as $item){
    echo $item.PHP_EOL;
}