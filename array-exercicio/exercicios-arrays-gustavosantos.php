<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, *, h2, h4{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <h2>Exercicios de Arrays - Gustavo Santos 2AII</h2>

<?php
$aluno = [
    'disciplina' => [
        'BD' =>
        [
            'Avaliação I'=> 30,
            'Avaliação II' => 27,
            'Seminário' => 30,
            'Atividade' => 10
        ],
        'ASW' =>[
            'Avaliação I'=> 40,
            'Avaliação II' => 20,
            'Seminário' => 30,
            'Atividade' => 10
        ],
        'PSW I' =>[
            'Avaliação I'=> 60,
            'Avaliação II' => 30,
            'Seminário' => 10
        ],
        'PI I' =>[
            'Avaliação I'=> 10,
            'Avaliação II' => 10,
            'Seminário' => 50,
            'Atividade' => 30
        ],
        
    ]
    ];

echo '<pre>';
print_r($aluno);
echo '</pre>';

foreach($aluno as $disciplina => $notas){
    echo'<h4>'.$disciplina.'</h4>';
    foreach($notas as $notas2 => $valores){
        echo '<br>'.$notas2.'<br>';
            foreach ($valores as $pontuacao => $value) {
                echo '<br>'.$pontuacao.':'.$value;
                
            }
    }
};
echo '<pre>'.'<br>';
print_r($aluno['disciplina']['PSW I']);
echo '</pre>';

echo 'Valor total da disciplina de PSW I é'.$aluno['disciplina']['PSW I']['Avaliação I'] + $aluno['disciplina']['PSW I']['Avaliação II'] +$aluno['disciplina']['PSW I']['Seminário'].'<br>';
echo 'Valor total da disciplina de ASW é'.$aluno['disciplina']['ASW']['Avaliação I'] + $aluno['disciplina']['ASW']['Avaliação II'] +$aluno['disciplina']['ASW']['Seminário'] + $aluno['disciplina']['ASW']['Atividade'].'<br>';
echo 'Valor total da disciplina de BD é'.$aluno['disciplina']['BD']['Avaliação I'] + $aluno['disciplina']['BD']['Avaliação II'] +$aluno['disciplina']['BD']['Seminário'] + $aluno['disciplina']['BD']['Atividade'].'<br>';
echo 'Valor total da disciplina de PI I é'.$aluno['disciplina']['PI I']['Avaliação I'] + $aluno['disciplina']['PI I']['Avaliação II'] +$aluno['disciplina']['PI I']['Seminário'] + $aluno['disciplina']['PI I']['Atividade'].'<br>';

?>
</body>
</html>