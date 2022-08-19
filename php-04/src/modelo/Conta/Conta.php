<?php

namespace Alura\Banco\Modelo\Conta;

class Conta //classe -> formas | cria um novo tipo
{
    //definir dados da conta
    private Titular $titular; //atributos dos objetos
    private float  $saldo;
    private static $numeroDeContas = 0;//atributo da conta

    //atributos privados e metodos publicos

    public function __construct(Titular $titular) //metodo construtor, sempre que eu criar uma nova conta ele sera chamado
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++; //self = classe Conta
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar) //método
    {
        $valorSaque = $valorASacar * 0.05;
        if ($valorSaque > $this->saldo){ //dessa classe se refere ao objeto que "chamou" o método
            echo "saldo indisponível";
        }else{
            $this->saldo -= $valorSaque;
        }
    }

    public function deposita($valorADepositar): void 
    {
        if($valorADepositar < 0){
            echo "valor precisa ser positvo";
        }else{
            $this->saldo += $valorADepositar;
        }
    }

    public function transferi(float $valorATransferir, Conta $contaDestino): void 
    {
        if($valorATransferir > $this->saldo){
            echo "saldo indisponivel";
        }else{
            $this->saca($valorATransferir);
            $contaDestino->deposita($valorATransferir);
        }
    }

    //getter and setter - define e recupera, por conta de estar privado
    //getters
    public function recuperaSaldo(): float
    {
     return $this->saldo;
    }
    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }
    public function recuperaCpfTitular()
    {
        return $this->titular->recuperaCpf();
    }
    // //setters NAO PRECISA MAIS POR CAUSA DO METODO CONSTRUTOR
    // public function defineCpfTitular(string $cpf)
    // {
    //  return $this->cpfTitular = $cpf;
    // }

    // public function defineNomeTitular(string $nome)
    // {
    //  return $this->nomeTitular = $nome;
    // }

    //código executado apenas dentro da classe
} 