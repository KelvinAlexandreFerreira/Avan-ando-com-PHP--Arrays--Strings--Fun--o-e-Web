<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    12345778911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    12445678988 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}