<?php

// Exemplo webhook Eduzz
foreach ($_POST as $key => $value) {
    $$key = $value;
}

if ($api_key == 'SUACHAVEDEAPI') {
    switch ($trans_status) {
        case '3':
            // Pagou
            libera_acesso();
        break;
        case '6':   // Aguardando reembolso
        case '7':   // Reembolsado
            remove_acesso();
        break;
            // ...
            // ...
            // ...
        default:
            echo "STATUS DESCONHECIDO";
        break;
    }
} else {
    echo "ACESSO INVALIDO";
}

function libera_acesso() {
    echo "ACESSO LIBERADO";
}

function remove_acesso() {
    echo "ACESSO REMOVIDO";
}
