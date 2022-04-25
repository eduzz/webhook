## Webhook Eduzz

o webhook eduzz permite que você receba notificações sobre alguns eventos que acontecem relacionados aos seus produtos na Eduzz.

### Configurando uma nova integração

Para configurar uma nova integração, basta conferir a tela de configuração de webhook no Órbita, lá, é possível cadastrar uma integração informando um nome, a url desejada, os dados de quais produtos devem serem disparados e qual o evento que você deseja receber.



Consideramos como **sucesso** todas as requisições que retornam o **[status HTTP 200](http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html)**.

As configurações para o cadastro de webhooks e acesso ao histórico de envio de requests podem serem acessadas no **[Órbita](https://orbita.eduzz.com/producer/webhook)**.

Também na **[Tela de configuração de webhook](https://orbita.eduzz.com/producer/webhook)** está disponível um histórico dos disparos.

### Autenticação

Para autenticar um **Webhook** na Eduzz, recomendamos o uso do campo chave de origem, disponível tanto no webhook quanto no serviço de **[Entrega Customizada](https://github.eduzz.com/eduzz/delivery_custom)**.

A chave para integração com o webhook pode ser visualizada em nossa plataforma no **[Órbita](https://orbita.eduzz.com/producer/config-api)**, ela será enviada no campo origin no payload do webhook.

**Ainda enviamos o campo api_key por motivos de compatibilidade, porém, ele não deve mais ser utilizado e será descontiunado em breve, para acesso a nossa [Api pública](https://api2.eduzz.com) deve ser utilizado o campo **[Api key](https://orbita.eduzz.com/producer/config-api)**, porém, depois de gerado, o mesmo não poderá mais ser visualizado.**

### Campos enviados para identificação e autenticação

Parâmetros | Descrição | Tipo
---------- | --------- | ----
origin     | **[Token](https://orbita.eduzz.com/producer/config-api)** de segurança do webhook | string
type       | Tipo da integração (invoice ou abandonment) | string

### Eventos disponíveis

Utilizando o webhook estão disponíveis os eventos de:
    
- Atualização de status de fatura e criação de contrato (invoice)
- Abandono de carrinho (abandonment)

O tipo **(invoice || abandonment)** será enviado no campo de tipo do webhook **(type)**.

Quando utilizando o webhook, para que você possa receber as duas integrações, é necessário cadastrar duas vezes a mesma url para os tipos de fatura e abandono.


**[Documentação dos campos enviados no webhook de fatura](campos-fatura.md)**\
**[Exemplo de código para receber webhook de fatura](exemplo-fatura.php)**

**[Documentação dos campos enviados no webhook de abandono](campos-abandono)**\
**[Exemplo de código para receber webhook de abandono de carrinho](exemplo-abandono.php)**

---

## Exemplo php de página para receber requests em PHP

```php

<?php

$input = json_decode(file_get_contents('php://input'));
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

if ($input->origin == 'Token de segurança do webhook') {
    switch ($input->trans_status) {
        case $status->paid:
            // Pagou
            libera_acesso();
        break;
        case $status->expired:
            // Pagou
            remove_acesso();
        break;
        case $status->refunded:   // Reembolsado
            remove_acesso();
        break;
        default:
            // Status desconhecido, provavalmente há algum problema com o corpo da request, verificar $_POST
        break;
    }
} else {
    // WEBHOOK NÃO AUTENTICADO PELA EDUZZ, PODE SER UMA TENTATIVA DE INVASÃO OU PROBLEMA COM O CORPO DA REQUISIÇÃO;
}
```

### Suporte

Usuários com problemas no webhook podem utilizar o suporte através dos nossos canais de atendimento no **[Órbita](https://orbita.eduzz.com)**.