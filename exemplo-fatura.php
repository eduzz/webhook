<?php

// https://orbita.eduzz.com/producer/config-api
$YOUR_API_TOKEN = '';

$input = (object) $_REQUEST;

$status = (object) [
    'open' => 1,
    'paid' => 3,
    'cancelled' => 4,
    'waitint_refund' => 6,
    'refunded' => 7,
    'expired' => 10,
    'recovering' => 11,
    'waiting_payment' => 15
];

if ($input->origin === $YOUR_API_TOKEN) {
    switch ($input->trans_status) {
        case $status->paid:
            // Pagou
            libera_acesso();
        break;
        case $status->expired:
            // Expirado
            remove_acesso();
        break;
        case $status->refunded:
            // Reembolsado
            remove_acesso();
        break;
        default:
            // Status desconhecido, provavalmente há algum problema com o corpo da request, verificar $_POST
        break;
    }
} else {
    // WEBHOOK NÃO AUTENTICADO PELA EDUZZ, PODE SER UMA TENTATIVA DE INVASÃO OU PROBLEMA COM O CORPO DA REQUISIÇÃO;
}