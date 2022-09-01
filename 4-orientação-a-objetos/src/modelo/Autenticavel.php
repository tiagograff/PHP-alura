<?php

namespace Alura\Banco\Modelo;

interface Autenticavel //classe abstrata com todos os métodos abstratos
{
    public function podeAutenticar(string $senha): bool;
}