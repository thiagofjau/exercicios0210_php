<?php
// Exercício 1

class Pessoa
{
    public function __construct(
        protected string $nome = '',//trocou private para protected, porque Aluno será herança de Pessoa
        protected string $cpf = '',
        int $ddd = 0,
        string $numero = '',
        $pessoa = null,
        protected array $telefone = array()//não precisa passar na herança de aluno
    ) {
        $this->telefone[] = new Telefone($ddd, $numero, $pessoa);
    }

    //GET
    public function getNome()
    {
        return $this->nome;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    //SET
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setTelefone($ddd, $numero, $pessoa)
    {
        $this->telefone[] = new Telefone($ddd, $numero, $pessoa);
    }
}
