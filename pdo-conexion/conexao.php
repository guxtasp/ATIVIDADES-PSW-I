
    <?php

    define('SERVER', 'localhost'); // variavel fixa
    define('USUARIO', 'root'); //usuario
    define('SENHA', 'Gustavo1@');
    define('DBNAME', 'CAD_ALUNO'); //nome da database

    try {
        $conexao = new pdo('mysql:host=' . SERVER . ';dbname=' .   //toda a variavel fixa do pdo (metodo)
                                                        DBNAME, USUARIO, SENHA);
    } catch (PDOException $e) {
        echo "Erro: Conexão com o banco de dados não estabelecida. Erro gerado." . $e->getMessage();
    }

    ?>
