<?php
$listaordenada = [
    'gato',
    'cachorro',
    'papagaio'
];

$matriz = [
    'nome' => 'Gustavo',  
    'endereco' => 'Avenida Barão do Rio Branco',
    'idade' => 17
];

echo '<pre>';
print_r($listaordenada);
echo '</pre>';

echo '<pre>';
print_r(count($listaordenada)); // conta o numero de elementos
echo '</pre>';

echo '<pre>';
print_r(array_keys($matriz)); // retorna e diz quais são as chaves em tal posição
echo '</pre>';


echo '<pre>';
print_r(array_values($matriz)); // retorna os valores do aarray
echo '</pre>';

echo '<pre>';
print_r(in_array('Gustavo',$matriz)); // verifica se há esse valor dentro deste array (1, 0)
echo '</pre>';


echo '<pre>';
print_r(array_search('papagaio',$listaordenada)); // informa qual posição está o valor
echo '</pre>';

?>