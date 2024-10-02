<?php
// Exercício 1

class Treino
{
    public function __construct(
        private string $series = '',
        private string $repeticoes = '',
        private $instrutor = null,
        private $aluno = null,
        private $aparelho = null
    ) {
    }
    //GET
    public function getSeries()
    {
        return $this->series;
    }
    public function getRepeticoes()
    {
        return $this->repeticoes;
    }
    public function getInstrutor()
    {
        return $this->instrutor;
    }
    public function getAluno()
    {
        return $this->aluno;
    }
    public function getAparelho()
    {
        return $this->aparelho;
    }
    //SET
    public function setSeries($series)
    {
        $this->series = $series;
    }
    public function setRepeticoes($repeticoes)
    {
        $this->series = $repeticoes;
    }
    public function setInstrutor($instrutor)
    {
        $this->instrutor = $instrutor;
    }
    public function setAluno($aluno)
    {
        $this->aluno = $aluno;
    }
    public function setAparelho($aparelho)
    {
        $this->aparelho = $aparelho;
    }
}
