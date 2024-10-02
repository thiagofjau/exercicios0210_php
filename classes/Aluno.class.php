<?php
// Exercício 1

class Aluno extends Pessoa
{
    public function __construct(
        private string $restricoes = '',
        private string $data_nascimento = '',
        private array $aparelho = array(),
        $nome = '',
        $cpf = '',
        $ddd = 0,
        $numero = '',
        $pessoa = null //já inicializou aqui, não precisa inicializar abaixo em parent
    ) {
        parent::__construct(
            $nome,
            $cpf,
            $ddd,
            $numero,
            $pessoa,
        );//como é heraça e não criou outro atributo, não precisa de get/set
    }
    //GET
    public function getRestricoes()
    {
        return $this->restricoes;
    }
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }
    public function getAparelho()
    {
        return $this->aparelho;
    }
    //SET
    public function setRestricoes($restricoes)
    {
        $this->restricoes = $restricoes;
    }
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }
    public function setAparelho($aparelho)
    {
        $this->aparelho[] = $aparelho;
    }
}
