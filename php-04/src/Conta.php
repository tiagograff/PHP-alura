<?php
class Conta //classe -> formas | cria um novo tipo
{
    //definir dados da conta
    private string $cpfTitular;//atributos
    private string $nomeTitular;
    private float  $saldo = 0;
    //atributos privados e metodos publicos

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
    //setters
    public function defineCpfTitular(string $cpf)
    {
     return $this->cpfTitular = $cpf;
    }

    public function defineNomeTitular(string $nome)
    {
     return $this->nomeTitular = $nome;
    }
} 