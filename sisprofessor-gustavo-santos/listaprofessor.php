<?php 

  require_once('conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM Professor');
  $retorno->execute();

?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="fundo">
    <div class="background-btns">
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>IDADE</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['idProfessor'] ?>   </td> 
                            <td> <?php echo $value['nomeProfessor']?>  </td> 
                            <td> <?php echo $value['idadeProfessor']?> </td> 

                            <td>
                               <form method="POST" action="AltProfessor.php">
                                        <input name="id" id="professor" type="hidden" value="<?php echo $value['idProfessor'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="crudProfessor.php">
                                        <input name="id" type="hidden" id="professor" value="<?php echo $value['idProfessor'];?>"/>
                                        <button name="excluir"  type="submit">Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>
<?php         
   echo "<button class='button button3'><a href='index.php'>voltar</a></button>";
?>
