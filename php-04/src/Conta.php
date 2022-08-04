<?php
class Conta //classe -> formas | cria um novo tipo
{
    //definir dados da conta
    public string $cpfTitular;//atributos
    public string $nomeTitular;
    public float  $saldo = 0;

    public function sacar(float $valorASacar) //método
    {
        if ($valorASacar > $this->saldo){ //dessa classe se refere ao objeto que "chamou" o método
            echo "saldo indisponível";
        }else{
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar($valorADepositar): void 
    {
        if($valorADepositar < 0){
            echo "valor precisa ser positvo";
        }else{
            $this->saldo += $valorADepositar;
        }
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void 
    {
        if($valorATransferir > $this->saldo){
            echo "saldo indisponivel";
        }else{
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }
} 