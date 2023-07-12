<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    include_once("header.php");
    ?>
     <h1 id="cadastro" class="title-main">
        Olha, é você ;)
    </h1>
    <table>
        <tr class="tabela-solicitado">
            <td class="dados-solicitado">Nome Completo</td>
            <td class="dados-recebido">
                <?php
                echo $_POST['nomeCompleto'];
                ?>
            </td>
        </tr>


        <tr class="tabela-solicitado">
            <td class="dados-solicitado">CPF</td>
            <td class="dados-recebido">
                <?php
                echo $_POST['cpf'];
                ?>
            </td>
        </tr>
        <tr class="tabela-solicitado">
            <td class="dados-solicitado">Endereço</td>
            <td class="dados-recebido">
                <?php
                echo $_POST['endereco'];
                ?>
            </td>
        </tr>
        <tr class="tabela-solicitado">
            <td class="dados-solicitado">Telefone</td>
            <td class="dados-recebido">
                <?php
                echo $_POST['telefone'];
                ?>
            </td>
        </tr>
        <tr class="tabela-solicitado">
            <td class="dados-solicitado">Data de nascimento</td>
            <td class="dados-recebido">
                <?php
                echo $_POST['dataDeNascimento'];
                ?>
            </td>
        </tr>
        <tr class="tabela-solicitado">
            <td class="dados-solicitado">Matrícula</td>
            <td class="dados-recebido">
                <?php
                echo $_POST['matricula'];
                ?>
            </td>
        </tr>

    </table>

    <form id="editar-form" action="editar.php" method="post">
        <input type="hidden" name="nomeCompleto" value="<?php echo $_POST['nomeCompleto']; ?>">
        <input type="hidden" name="cpf" value="<?php echo $_POST['cpf']; ?>">
        <input type="hidden" name="dataDeNascimento" value="<?php echo $_POST['dataDeNascimento']; ?>">
        <input type="hidden" name="endereco" value="<?php echo $_POST['endereco']; ?>">
        <input type="hidden" name="telefone" value="<?php echo $_POST['telefone']; ?>">
        <input type="hidden" name="matricula" value="<?php echo $_POST['matricula']; ?>">

        <input class="submit-dados" type="submit" value="Vai editar?">
    </form>

    <?php
    include_once("footer.php");
    ?>
</body>

</html>
