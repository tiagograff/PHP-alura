<?php

namespace Alura\Banco\Modelo;

final class Endereco //não da para extender
{
   use AcessoPropriedade; //utilizando um trait

    //atributos
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    //metodo construtor
    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua    = $rua;
        $this->numero = $numero;
    }

    //geters
    public function recuperaCidade(): string
    {
        return $this->cidade;
    }
    public function recuperaBairro(): string
    {
        return $this->bairro;
    }
    public function recuperaRua(): string
    {
        return $this->rua;
    }
    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString():string
    {
        return "($this->rua),($this->numero),($this->bairro),($this->cidade)";
    }

    public function alteraCidade($novaCidade): void{
        $this->cidade = $novaCidade;
    }

    public function __set($nomeAtributo, $value): void{
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($value);

    }
}