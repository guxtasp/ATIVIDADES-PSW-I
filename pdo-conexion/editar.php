<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include_once("header.php");
    ?>
<form id="editar-dados" action="mostraaluno.php" method="post">
    <div class="preenchimento-dados">
        <label for="nomeCompleto">Nome Completo</label>
        <input type="text" name="nomeCompleto" id="nomeCompleto" value="<?php echo $_POST['nomeCompleto']; ?>">
    </div>
    <div class="preenchimento-dados">
        <label for="cpf">CPF</label>
        <input type="number" name="cpf" id="cpf" value="<?php echo $_POST['cpf']; ?>">
    </div>
    <div class="preenchimento-dados">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco" value="<?php echo $_POST['endereco']; ?>">
    </div>
    <div class="preenchimento-dados">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo $_POST['telefone']; ?>">
    </div>
    <div class="preenchimento-dados">
        <label for="dataDeNascimento">Data de nascimento</label>
        <input type="text" name="dataDeNascimento" id="dataDeNascimento" value="<?php echo $_POST['dataDeNascimento']; ?>">
    </div>
    <div class="preenchimento-dados">
        <label for="matricula">Matrícula</label>
        <input type="text" name="matricula" id=" matricula" value="<?php echo $_POST['matricula']; ?>">
    </div>
    <div class="preenchimento-dados">
        <input id="submit-cadastro" class="submit-dados" type="submit" value="Prontinho :D">
    </div>
</form>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>l