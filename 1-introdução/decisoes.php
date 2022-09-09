<?php
$idade = 17;
$numDePessoas = 1;
echo "voce so pode entrar se tiver a partir de 18 anos".PHP_EOL;
echo "ou 16 anos e acompanhado".PHP_EOL;
// || ou, ou or
// && e, ou and
// == comparação
if ($idade >= 18) { //se
   echo "voce tem $idade anos, pode entrar sozinho!".PHP_EOL;
}elseif ($idade >16 && $numDePessoas > 1){//senão caso
   echo "voce tem $idade anos, e esta acompanhado. pode entrar!".PHP_EOL;
}else{//senão
   echo"você não pode entrar!".PHP_EOL;
}
echo"adeus!".PHP_EOL;