<?php
// Exercício 1

class Aparelho
{
    public function __construct(
        private string $descritivo = '',
        private array $aluno = array()
    ) {
    }
    //GET
    public function getAluno()
    {
        return $this->aluno;
    }
    public function getDescritivo()
    {
        return $this->descritivo;
    }
    //SET
    public function setAluno($aluno)
    {
        $this->aluno[] = $aluno;
    }
    public function setDescritivo($descritivo)
    {
        $this->descritivo = $descritivo;
    }
}
