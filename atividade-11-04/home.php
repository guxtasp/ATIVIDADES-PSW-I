<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Página Inicial | New Trends</title>
</head>
<body>
    <?php
    include_once ("header.php");
    ?>
    <div class="homepage">
        <div class="homepage-acesso">
            <img id="homepage-acesso-img" src="assets/logotipo_logo.png" alt="">
            <h1 class="title-main" >Acesse</h1>
            <h3>Com e-mail e senha para entrar</h3>
        </div>
        <div class="homepage-forms">
            <form action="mostraaluno.php" method="post">
                <div class="preenchimento-dados">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="         Digite seu e-mail:" required>
                </div>
                <div class="preenchimento-dados">
                    <label for="senha">Senha</label>
                    <input type="password" placeholder="          Digite sua senha:" name="senha" required>
                    <input class="submit-dados" type="submit" value="Acessar">
                </div>
            </form>
            <div class="homepage-opcional">
                <div class="preenchimento-dados-opcional">
                    <input type="checkbox" name="lembrar-senha" id="lembrar-senha">
                    <label for="lembrar-senha">Lembrar minha senha</label>
                </div>
                <a href="#">Esqueci minha senha</a>
            </div>
            <div class="homepage-cadastro">
                <hr>
                <a href="cadastro-aluno.php">Possui cadastro?</a>
            </div>
        </div>
    </div>
    <?php
    include_once ("footer.php");
    ?>
</body>
</html>