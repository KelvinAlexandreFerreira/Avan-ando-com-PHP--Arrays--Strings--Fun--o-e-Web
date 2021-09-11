<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '123.457.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '124.456.789-88' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.754.789-44'] = [ 
    'titular' => 'Vinicius',
    'saldo' => 1000
    
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}