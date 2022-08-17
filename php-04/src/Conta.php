<?php
class Conta //classe -> formas | cria um novo tipo
{
    //definir dados da conta
    private string $cpfTitular;//atributos dos objetos
    private string $nomeTitular;
    private float  $saldo;
    private static $numeroDeContas = 0;//atributo da conta

    //atributos privados e metodos publicos

    public function __construct(string $cpfTitular, string $nomeTitular) //metodo construtor, sempre que eu criar uma nova conta ele sera chamado
    {
        $this->cpfTitular  = $cpfTitular;//parametros
        $this->validaNomeTitular($nomeTitular); //chamando a função
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;

        self::$numeroDeContas++; //self = classe Conta
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar) //método
    {
        if ($valorASacar > $this->saldo){ //dessa classe se refere ao objeto que "chamou" o método
            echo "saldo indisponível";
        }else{
            $this->saldo -= $valorASacar;
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
    public function recuperaCpfTitular(): string
    {
     return $this->cpfTitular;
    } 
    public function recuperaNomeTitular(): string
    {
     return $this->nomeTitular;
    } 
    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
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
    private function validaNomeTitular($nomeTitular)
    {
        if(strlen($nomeTitular)<5)//strlen -> tamanho da string 
        {
            echo "nome precisa ter mais que 5 caracteres";
            exit();
        } 
    }
} 