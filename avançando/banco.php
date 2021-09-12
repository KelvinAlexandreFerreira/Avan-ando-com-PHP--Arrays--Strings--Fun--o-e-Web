<?php

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");       
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

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

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 1500);
$contasCorrentes['123.457.789-11'] = sacar($contasCorrentes['123.457.789-11'], 500);


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}