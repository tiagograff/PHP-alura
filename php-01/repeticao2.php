<?php
//inicializando; verificando; adcionando
for ($contador = 1; $contador <= 15; $contador ++){
    if($contador == 13){
        // continue; para nesse momento e conitnua
        break; //vai parar no 13
    }echo "#$contador" . PHP_EOL;
}
//$contador += 1 (recebendo o próprio valor + 1)