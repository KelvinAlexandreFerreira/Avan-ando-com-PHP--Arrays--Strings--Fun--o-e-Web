<?php

require_once 'funcoes.php';

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

unset($contasCorrentes['123.457.789-11']);

titularComLetrasMaiusculas($contasCorrentes['124.456.789-88']);


foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf $titular $saldo");
}