<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('cidade','bairro','rua','numero');
$outroEndereco = new Endereco('perdida','joark','didos','321b');


$umEndereco->cidade = 'nova cidade';

echo $umEndereco.PHP_EOL;
echo $outroEndereco;