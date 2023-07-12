<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');

##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nomeAluno = $_GET["nomeAluno"];
        $enderecoAluno = $_GET["enderecoAluno"];
        $telefoneAluno = $_GET["telefoneAluno"];
        $matriculaAluno = $_GET["matriculaAluno"];
        $emailAluno = $_GET["emailAluno"];
        $senhaAluno = $_GET["senhaAluno"];

        ##codigo SQL
        $sql = "INSERT INTO Aluno(nomeAluno, enderecoAluno, telefoneAluno, matriculaAluno, emailAluno, senhaAluno) 
                VALUES('$nomeAluno','$enderecoAluno', '$telefoneAluno', '$matriculaAluno', '$emailAluno', '$senhaAluno')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o Aluno
                $nomeAluno foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='cadastro-aluno.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $id = $_POST["id"];
   
      ##codigo sql
    $sql = "UPDATE  Professor SET nomeProfessor= :nome, idadeProfessor= :idade WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o Professor
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `Professor` WHERE idProfessor={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o Professor
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaprofessor.php'>voltar</a></button>";
        }

}

        
?>
