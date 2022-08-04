<?php
class Conta //classe -> formas | cria um novo tipo
{
    //definir dados da conta
    private string $cpfTitular;//atributos
    private string $nomeTitular;
    private float  $saldo = 0;
    //atributos privados e metodos publicos

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

    public function defineCpfTitular(string $cpf)
    {
        $this->cpfTitular = $cpf;
    }

    public function defineNomeTitular(string $nome)
    {
        $this->nomeTitular = $nome;
    }
    
    public function recuperarSaldo():float
    {
        return $this->saldo;
    }
    public function recuperarCpfTitular():float
    {
        return $this->cpfTitular;
    }
    public function recuperarNomeTitular():float
    {
        return $this->recuperarNomeTitular();
    }
} 