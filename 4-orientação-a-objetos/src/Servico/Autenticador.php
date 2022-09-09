<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel,string $senha): void
    {
        if($autenticavel->podeAutenticar($senha))
        {
            echo "ok. usuario logado no sistema";
        }else
        {
            echo "senha incorreta";
        }
    }
}