<?php

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

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
    exibeMensagem("Você não pode sacar este valor");
} else {
    $contasCorrentes['123.456.789-10']['saldo'] -= 1500;
}

if (500 > $contasCorrentes['123.457.789-11']['saldo']) {
    exibeMensagem("Você não pode sacar este valor");
} else {
    $contasCorrentes['123.457.789-11']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}