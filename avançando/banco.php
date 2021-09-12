<?php

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");       
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;   
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }
    return $conta;
}

function exibeMensagem(string $mensagem)
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

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'], 
    1500
);
$contasCorrentes['123.457.789-11'] = sacar(
    $contasCorrentes['123.457.789-11'], 
    500
);
$contasCorrentes['124.456.789-88'] = depositar(
    $contasCorrentes['124.456.789-88'], 
    100
);


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}