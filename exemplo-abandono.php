<?php

// https://orbita.eduzz.com/producer/config-api
$YOUR_API_TOKEN = '';

$input = (object) $_REQUEST;

if ($input->origin === $YOUR_API_TOKEN) {
    $carrinhoAbandonado = $input;

    gravar_lead($carrinhoAbandonado);
} else {
    // WEBHOOK NÃO AUTENTICADO PELA EDUZZ, PODE SER UMA TENTATIVA DE INVASÃO OU PROBLEMA COM O CORPO DA REQUISIÇÃO;
}