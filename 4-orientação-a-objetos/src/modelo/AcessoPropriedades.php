<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedade
{
    public function __get(string $nomeDoAtributo)
    {
        //Rua -> recupera rua
        $metodo = 'recupera'.ucfirst($nomeDoAtributo); //primeira letra, em maiusculo
        return $this->$metodo();
    }
}