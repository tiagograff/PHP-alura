<?php
class Titular
{
    private Cpf $cpf;
    private $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;//parametros
        $this->nome = $nome;
        $this->validaNomeTitular($nome); //chama a função
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}