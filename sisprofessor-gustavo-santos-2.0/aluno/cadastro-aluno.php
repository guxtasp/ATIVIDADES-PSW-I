<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Cadastro | New Trends</title>
</head>

<body>
    <?php 
    require_once('../header.php');
    ?>
    <h1 id="cadastro" class="title-main">
        Faça seu cadastro ;)
    </h1>
    <form id="cadastro-aluno" action="crudAluno.php" method="GET">
        <div class="preenchimento-dados">
            <label for="nomeAluno">Nome Completo:</label>
            <input type="text" name="nomeAluno" id="nomeAluno" required>
        </div>
        <div class="preenchimento-dados">
            <label for="enderecoAluno">Endereço</label>
            <input type="text" name="enderecoAluno" id="enderecoAluno" required>
        </div>
        <div class="preenchimento-dados">
            <label for="telefoneAluno">Telefone</label>
            <input type="text" name="telefoneAluno" id="telefoneAlunp" required placeholder="   (XX) XXXXX-XXXX">
        </div>
        <div class="preenchimento-dados">
            <label for="matriculaAluno">Matrícula</label>
            <input type="text" name="matriculaAluno" id=" matriculaAluno" required>
        </div>
        <div class="preenchimento-dados">
            <label for="emailAluno">E-mail:</label>
            <input type="email" name="emailAluno" id=" emailAluno" required>
        </div>
        <div class="preenchimento-dados">
            <label for="senhaAluno">Senha:</label>
            <input type="password" name="senhaAluno" id="senhaAluno" required>
        </div>
        <div class="preenchimento-dados">
            <input id="submit-cadastro" class="submit-dados" type="submit" value="Prontinho :D" name="cadastrar">
        </div>
    </form>

</body>

</html>