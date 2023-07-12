<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once('conexao.php'); // incluiu o codigo

$nomeCompleto = $_POST['nomeCompleto'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$dtaNascimento = $_POST['dataDeNascimento'];
$matricula =  $_POST['matricula'];
$primeiroNome = explode(' ', trim($nomeCompleto))[0];

echo "Nome: $nomeCompleto<br>";
echo "Endereço: $endereco <br>";
echo "Telefone: $telefone<br>";
echo "Data de Nascimento: $dtaNascimento<br>";
echo "Matricula: $matricula<br>";

$sql = "INSERT INTO Aluno (matricula, nomeCompleto, endereco, telefone, dtaNascimento) VALUES ('$matricula', '$nomeCompleto', '$endereco', '$telefone', '$dtaNascimento')";
$stmt = $conexao->prepare($sql);


if($stmt->execute()){
    echo "O aluno $primeiroNome foi incluído com sucesso!";
}
?>