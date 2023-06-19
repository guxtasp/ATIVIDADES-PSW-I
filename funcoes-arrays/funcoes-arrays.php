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



    echo "Uso do for para impressão de dados:";
    for($a=0; $a<count($informacoes); $a++) {
    print_r ($informacoes[$a]);
    }

    echo "Uso do foreach para impressão de dados:";
    foreach ($dados as $chave => $valor) {
        foreach ($valor as $Nchave => $Nvalor) {
            echo $Nchave;
            echo "<pre>";
                print_r($Nvalor);
            echo "</pre>";
        }
}
    


echo "FUNÇÃO: UASORT";

    echo '<pre>';
    echo "Antes";
        print_r($array);
    echo '</pre>';

    uasort($informacoes, function ($a, $b) {
        if ($a['nome'] == $b['nome']) return 0;

        return ($a['nome'] < $b['nome'] ? -1 : 1);

    });

    echo '<pre>';
    echo "Depois de usar a função uasort: <br> <br> ";
        print_r($informacoes);
    echo '</pre>';
