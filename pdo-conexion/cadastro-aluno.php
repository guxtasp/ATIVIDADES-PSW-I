<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro | New Trends</title>
</head>

<body>
    <?php
    include_once ("header.php");
    ?>
    <h1 id="cadastro" class="title-main">
        Faça seu cadastro ;)
    </h1>
    <form id="cadastro-aluno" action="teste.php" method="post">
        <div class="preenchimento-dados">
            <label for="nomeCompleto">Nome Completo</label>
            <input type="text" name="nomeCompleto" id="nomeCompleto" required>
        </div>
        <div class="preenchimento-dados">
            <label for="cpf">CPF</label>
            <input type="number" name="cpf" id="cpf">
        </div>
        <div class="preenchimento-dados">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" required>
        </div>
        <div class="preenchimento-dados">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" required placeholder="   (XX) XXXXX-XXXX">
        </div>
        <div class="preenchimento-dados">
            <label for="dataDeNascimento">Data de nascimento</label>
            <input type="text" name="dataDeNascimento" id="dataDeNascimento" required placeholder="    XX/XX/XXXX">
        </div>
        <div class="preenchimento-dados">
            <label for="matricula">Matrícula</label>
            <input type="text" name="matricula" id=" matricula" required>
        </div>
        <div class="preenchimento-dados">
            <input id="submit-cadastro" class="submit-dados" type="submit" value="Prontinho :D">
        </div>
    </form>
    <?php
    include_once ("footer.php");
    ?>
</body>

</html>