<?php
// Exercício 1

class Telefone
{
    private int $ddd;
    private string $numero;
    private $pessoa = null;

    public function __construct(int $ddd = 0, string $numero = '', $pessoa = null)
    {
        $this->ddd = $ddd;
        $this->numero = $numero;
        $this->pessoa = $pessoa;
    }
    //GET
    public function getDdd(): int
    {
        return $this->ddd;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }
    public function getPessoa(): ?Pessoa
    {
        return $this->pessoa;
    }
    //SET
    public function setDdd(int $ddd): void
    {
        $this->ddd = $ddd;
    }

    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }
    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;
    }
}

?>