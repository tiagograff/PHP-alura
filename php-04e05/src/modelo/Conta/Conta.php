<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta //classe -> formas | cria um novo tipo
{
    //definir dados da conta
    private Titular $titular; //atributos dos objetos
    protected float $saldo;
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
        $tarifaDeSaque = $valorASacar * $this->percentualTarifa(); //método
        
        $valorSaque = $valorASacar + $tarifaDeSaque;
        if ($valorSaque > $this->saldo){
            echo "saldo indisponivel";
            return;
        }

        $this->saldo -= $valorSaque;
        
    }

    public function deposita($valorADepositar): void 
    {
        if($valorADepositar < 0){
            echo "valor precisa ser positvo";
        }else{
            $this->saldo += $valorADepositar;
        }
    }

    abstract protected function percentualTarifa(): float; //todas que extenderem contas devem ter este método

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