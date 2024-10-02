<?php

require_once 'Pessoa.class.php';
require_once 'Aluno.class.php';
require_once 'Telefone.class.php';
require_once 'Instrutor.class.php';
require_once 'Aparelho.class.php';
require_once 'Treino.class.php';

// $aluno = new Aluno('João', '123.456.789-00', ["Supino"], '99999-9999', $aluno);
$instrutor = new Instrutor(
    'Educação Física',
    'Maria',
    '987.654.321-00',
    11,
    '7777-9999'
);
$aluno = new Aluno(
    'Problema Cardíaco',
    '25/08/2008',
    array(),
    'Pedro Carlos',
    '123.456.789-00',
    11,
    '99999-9999'
);

$aparelho = new Aparelho('Supino');

$treino = new Treino(3, 20, $instrutor, $aluno, $aparelho);

//mostrar dados do treino sem usar vardump
//Aluno
// echo "Nome Aluno: {$treino->getAluno()->getNome()} ";
// echo "CPF Aluno: {$treino->getAluno()->getCpf()} <br>";
// echo "Data de Nascimento Aluno: {$treino->getAluno()->getDataNascimento()} <br>";
// echo "Restrições Aluno: {$treino->getAluno()->getRestricoes()} <br>";
// echo "Instrutor: {$treino->getInstrutor()->getNome()} <br>";
// //telefone forEach pra pegar todos os tel, se tiver mais de um
// foreach($treino->getAluno()->getTelefone() as $telefone){
//     echo "Telefone: ({$telefone->getDdd()}) - {$telefone->getNumero()} <br>";
// }
// echo "Aparelho: {$treino->getAparelho()->getDescritivo()} <br>";
// echo "Séries: {$treino->getSeries()} <br>";
// echo "Repetições: {$treino->getRepeticoes()} <br><br>";

// echo "Nome do Instrutor: {$treino->getInstrutor()->getNome()} <br>";
// echo "CPF do Instrutor: {$treino->getInstrutor()->getCpf()} <br>";
// foreach($treino->getInstrutor()->getTelefone() as $telefone){
//     echo "Telefone: ({$telefone->getDdd()}) - {$telefone->getNumero()} <br>";
// }
// echo "Especialidade: {$treino->getInstrutor()->getEspecialidade()} <br><br>";

// echo "<h4>Aparelho</h4>";
// echo "Descrição: {$treino->getAparelho()->getDescritivo()} <br>";
// echo "Séries: {$treino->getSeries()} - Repetições: {$treino->getRepeticoes()} <br>";


include "../pages/saida.php"; //apesar de chamar aqui, o arquivo de saída ainda será este index.php, aí posso estilizar o arquivo de saída, mas ainda executa o index.php
