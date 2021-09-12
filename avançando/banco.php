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

if (1500 > $contasCorrentes['123.456.789-10']['saldo']) {
    echo "Você não pode sacar este valor" . PHP_EOL;
} else {
    $contasCorrentes['123.456.789-10']['saldo'] -= 1500;
}

if (500 > $contasCorrentes['123.457.789-11']['saldo']) {
    echo "Você não pode sacar este valor" . PHP_EOL;
} else {
    $contasCorrentes['123.457.789-11']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}