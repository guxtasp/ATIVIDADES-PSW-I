<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // array explicita
    $lista = array('Casa', 'carro', 'cama');

    echo '<pre>';
    print_r($lista);
    echo '</pre>';

    //array impliicta
    $listaimplicita = [
        'casa', 'carro', 'cama', 'cachorro'
    ];


    echo '<pre>';
    print_r($listaimplicita);
    echo '</pre>';

    // array chave valor

    $dados = [
        'nome' => 'gustavo',  // posicao(senha) => valor
        'rua'  => 'avenida barao do rio branco',
        'cidade' => 'guanambi'
    ];

    echo '<pre>';
    print_r($dados);
    echo '</pre>';


    // adicionando valores em array

    $listaimplicita[] = 'moto';

    echo '<pre>';
    print_r($listaimplicita);
    echo '</pre>'; // posicao 4

    $dados[] = 'BA';

    echo '<pre>';
    print_r($dados);
    echo '</pre>'; // posicao 0


    // alterando valores no array
    $dados['nome'] = 'nicole'; // nome da posicao e substitue o valor

    echo '<pre>';
    print_r($dados);
    echo '</pre>';

    // posicoes de array em multivalores

    $arrayAlunos = [
        0 => 'luna',
        1 => 'agnes',
        3 => 'rafael',
        2 => 'julio',
        'nome' => 'cananda'
    ];

    $arrayAlunos[] = 'gustavo';// posicao 4

    echo '<pre>';
    print_r($arrayAlunos);
    echo '</pre>';

    ?>
    <?php
    // array miltidimensional
    $arrayAluno = [
        'aluno' => [
            [
                'id' => 0,
                'nome' => 'gustavo',
                'idade' => 25
            ],
            [
                'id' => 1,
                'nome' => 'nicolle',
                'idade' => 20
            ],
            [
                'id' => 2,
                'nome' => 'cananda',
                'idade' => 21
            ]
        ]
    ];
    echo '<pre>';
    print_r($arrayAluno);
    echo '</pre>';

    echo '<pre>';
    print_r($arrayAluno['aluno'][1]); // para abrir array dentro de array, o colchete deve estar sepado e nao dentro como: ['aluno'[1]]
    echo '</pre>';
    
    ?>

</body>

</html>