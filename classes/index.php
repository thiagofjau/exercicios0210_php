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


include "../pages/saida.php";
?>

