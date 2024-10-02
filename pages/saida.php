<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f0f0f0;
    }
    .container {
        display: flex;
        flex-direction: row;
        gap: 10px;
        max-width: 100%;
        margin: auto;
    }
    .card {
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 100%;
        background-color: #f8f9fa;
    }
    .card-header {
        background-color: #f8f9fa;
        padding: 10px 20px;
        border-bottom: 1px solid #ccc;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }
    .card-body {
        padding: 20px;
        
    }
    h2, h3 {
        margin: 0;
    }
    p {
        margin: 10px 0;
    }
</style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Dados do Aluno</h2>
        </div>
        <div class="card-body">
            <p><strong>Nome:</strong> <?=$treino->getAluno()->getNome()?></p>
            <p><strong>CPF:</strong> <?=$treino->getAluno()->getCpf()?></p>
            <p><strong>Data de Nascimento:</strong> <?=$treino->getAluno()->getDataNascimento()?></p>
            <p><strong>Restrições:</strong> <?=$treino->getAluno()->getRestricoes()?></p>
            <h3>Telefones</h3>
            <?php foreach($treino->getAluno()->getTelefone() as $telefone): ?>
                <p><strong>Telefone:</strong> (<?=$telefone->getDdd()?>) <?=$telefone->getNumero()?></p>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Dados do Instrutor</h2>
        </div>
        <div class="card-body">
            <p><strong>Nome:</strong> <?=$treino->getInstrutor()->getNome()?></p>
            <p><strong>CPF:</strong> <?=$treino->getInstrutor()->getCpf()?></p>
            <h3>Telefones</h3>
            <?php foreach($treino->getInstrutor()->getTelefone() as $telefone): ?>
                <p><strong>Telefone:</strong> (<?=$telefone->getDdd()?>) <?=$telefone->getNumero()?></p>
            <?php endforeach; ?>
            <p><strong>Especialidade:</strong> <?=$treino->getInstrutor()->getEspecialidade()?></p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Dados do Aparelho</h2>
        </div>
        <div class="card-body">
            <p><strong>Descrição:</strong> <?=$treino->getAparelho()->getDescritivo()?></p>
            <p><strong>Séries:</strong> <?=$treino->getSeries()?></p>
            <p><strong>Repetições:</strong> <?=$treino->getRepeticoes()?></p>
        </div>
    </div>
</div>


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