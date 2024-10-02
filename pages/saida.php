<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  
    
<label for="">Nome Aluno</label>
<td>
    <th>
        <h1> <?=$treino->getAluno()->getNome()?></h1>
        <h1> <?=$treino->getAluno()->getCpf()?></h1>
    </th>
</td>

    <?php 
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
    ?>
</body>
</html>