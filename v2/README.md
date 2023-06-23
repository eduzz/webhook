# Webhook v2 Eduzz

O Webhook da Eduzz permite que você receba notificações sobre alguns eventos de seus produtos.

Sempre que uma fatura for alterada nosso sistema fará uma notificação via POST para uma URL pré configurada.

## Configurando uma nova integração :wrench:

Para configurar uma nova integração, basta acessar **[tela de configuração](https://orbita.eduzz.com/producer/webhook)** no Órbita, é possível cadastrar uma integração, escolhendo o tipo de evento (fatura/contrato ou abandono de carrinho), informar um nome desejado para a integração, qual produto deseja receber os eventos e a url que irá receber as informações.

Após preencher todas informações é necessário verificar se a URL está disponível para receber as informações enviadas pela Eduzz. Só será possível salvar se a URL retornar status padrão 200 ([https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/200](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/200)).

A verificação do cadastro de uma url do tipo "fatura" é realizada disparando um evento de teste para a url informada com os seguintes dados:

```json
{
  "type": "invoice|contract",
  "pro_value": "10",
  "trans_cod": "1",
  "trans_checkoutid": "50",
  "trans_value": "50",
  "trans_paid": "51",
  "cop_value": "0",
  "partner_cod": "5",
  "trans_next": "5",
  "notification_url": "http://urldepostback.com",
  "trans_paymentmethod": "3",
  "trans_createdate": "20190904",
  "trans_paiddate": "20190905",
  "trans_duedate": "20191005",
  "trans_createtime": "12:00:00",
  "trans_paidtime": "",
  "trans_status": "3",
  "recurrence_status": "1",
  "recurrence_status_name": "Em Dia",
  "trans_duetime": "12:00:00",
  "trans_items_quantity": "1",
  "trans_key": "7d8as76fa8d8sa7da8g78a6sd",
  "recurrence_cod": "10",
  "recurrence_type": "Recurrence type",
  "recurrence_plan": "Recurrence plan",
  "product_cod": "1",
  "product_name": "Nome do produto",
  "product_parent_cod": "2",
  "product_refund": "7",
  "product_sku": "83782391",
  "discount_coupon_code": "CK98S5",
  "cus_cod": "1",
  "cus_taxnumber": "99999999911",
  "cus_name": "Teste Webhook",
  "cus_email": "webhook@eduzz.com",
  "cus_tel": "011999999999",
  "cus_tel2": "011999999999",
  "cus_cel": "011999999999",
  "cus_apikey": "ccmcqDl7o3",
  "cus_address": "Av. São Paulo",
  "refund_type": "parcial",
  "student_cod": "244453",
  "student_taxnumber": "99999999999",
  "student_name": "Nome do aluno",
  "student_email": "emaildoaluno@provedor.com",
  "student_tel": "011999999999",
  "student_tel2": "011999999999",
  "student_cel": "011999999999",
  "cus_address_number": "111",
  "cus_address_country": "Brasil",
  "cus_address_district": "Jardim Brasil",
  "cus_address_comp": "AP 38",
  "cus_address_city": "Sorocaba",
  "cus_address_state": "São Paulo",
  "cus_address_zip_code": "07052-160",
  "recurrence_startdate": "2022-09-04 10:08:46",
  "recurrence_interval": "1",
  "recurrence_interval_type": "month",
  "recurrence_count": "3",
  "recurrence_first_payment": "1",
  "aff_cod": "1",
  "aff_name": "Nome do Afiliado",
  "aff_email": "emaildoafiliado@provedor.com",
  "aff_document_number": "99999999999",
  "aff_value": "20",
  "tracker_trk": "Tracker 1 da transação",
  "tracker_trk2": "Tracker 2 da transação",
  "tracker_trk3": "Tracker 3 da transação",
  "tracker_utm_source": "Anunciante",
  "tracker_utm_content": "Fonte dentro do Anúncio",
  "tracker_utm_medium": "Midia utilizada do Anúncio",
  "tracker_utm_campaign": "Campanha do anúncio",
  "utm_source": "Anunciante",
  "utm_content": "Fonte dentro do Anúncio",
  "utm_medium": "Midia utilizada do Anúncio",
  "utm_campaign": "Campanha do anúncio",
  "sku_reference": "83782391",
  "eduzz_value": "1",
  "other_values": "0",
  "trans_items[0][item_id]": "2",
  "trans_items[0][item_name]": "Descrição do item adquirido",
  "trans_items[0][item_value]": "50",
  "trans_items[0][item_coupon_code]": "CK98S5",
  "trans_items[0][item_coupon_value]": "0.5",
  "trans_items[0][item_product_id]": "1",
  "trans_items[0][item_product_name]": "Descrição do produto adquirido",
  "trans_items[0][item_product_refund]": "7",
  "trans_items[0][item_eduzz_value]": "10",
  "trans_items[0][producer_id]": "5",
  "trans_items[0][item_product_sku_reference]": "CK98S5",
  "trans_items[0][item_product_partner_cod]": "5",
  "trans_items[0][item_product_chargetype]": "N",
  "trans_barcode": "99999.99999 99999.99999 99999.999999 9 99999999999999",
  "trans_orderid": "99999999999999999999999999999999",
  "trans_currency": "BRL",
  "trans_job_id": "5",
  "trans_job_status": "3",
  "request_token": "6J8iaAeFBj",
  "billet_url": "https://sun.eduzz.com/c_99999999999999999999999999999999",
  "page_checkout_url": "https://sun.eduzz.com/1",
  "trans_bankslip": "https://eduzz.com/9/9999/1",
  "recurrence_canceled_at": "2019-09-03 20:02:34",
  "product_chargetype": "N",
  "refund_date": "2019-02-03",
  "pro_cod": "27270338",
  "pro_document_number": "88955858000150",
  "pro_name": "QA-ORBITA-NAO-ALTERAR-NAO-ALTERAR",
  "pro_email": "qa-orbita@eduzz.com",
  "origin_secret": "eyJpdiI6IllieTdnK0VhR3BBSDlGcnA4aVJRQUE9PSIsInZhbHVlIjoiY1lcL21QMG5VSCt2K0UyV3I3QjZyNkZBT1JYQnFUc05ldnp1UXZnenoxaERweElIY05QRmpTZjhyTVloTDV2SDgiLCJtYWMiOiIwYjExZDNjNTJlZGRhMGYyNWViNTQ1NWEwMjE4ZGNiNDlhMWQ3Mzk1OWZmMzljNTNmYzAyZWY4OTMyOGQzOTU3In0=",
  "api_key": "04a4bc373f"
}
```

Já a verificação para webhook do tipo "Abandono de Carrinho" é realizada disparando um evento de teste para a URL informada com os seguintes dados:

```json
{
    "type": "abandonment",
    "identifier": "36ec1293-17f8-404a-bbda-b58eaeb21aab",
    "cartAccessedAt": "2023-01-05T14:17:44.921Z",
    "checkoutUrl": "https://sun.eduzz.com/1",
    "invoiceId": "1",
    "product[id]": "1",
    "product[title]": "Nome do produto",
    "campaign[id]": "1",
    "campaign[key]": "SB2XPATK1Z",
    "affiliate[id]": "1",
    "affiliate[name]": "Nome do Afiliado",
    "customer[name]": "Nome do Cliente",
    "customer[phone]": "011999999999",
    "customer[email]": "emaildocliente@provedor.com",
    "producerId": "27270338"
}
```

## Campos enviados para identificação e autenticação :key:

Parâmetros | Descrição | Tipo
---------- | --------- | ----
origin     | **[Token](https://orbita.eduzz.com/producer/config-api)** de segurança do webhook | string
type       | Tipo da integração (invoice, contract ou abandonment) | string

## Eventos disponíveis (body.type) :motorway:

- *Atualização de status de fatura e criação de contrato (invoice ou contract)*
- *Abandono de carrinho (abandonment)*

O tipo **(invoice, contract ou abandonment)** será enviado no campo **(type)**.

Quando utilizando o webhook, para que você possa receber as duas integrações, é necessário cadastrar duas vezes a mesma url para os tipos de fatura/contrato e abandono.

Type | Descrição
--------- | ----
abandonment | Um evento de abandono de carrinho, **[a documentação pode ser conferida aqui](campos-abandono.md)**
invoice | Um evento de alteração do status de uma fatura ou a criação de uma, **[a documentação pode ser conferida aqui](campos-fatura.md)**
contract | Um evento de alteração do status de um contrato ou a criação de um, **[a documentação pode ser conferida aqui](campos-fatura.md)**

## Autenticação :closed_lock_with_key:

Para autenticar um **Webhook** na Eduzz, recomendamos o uso do campo chave de origem, disponível tanto no webhook quanto no serviço de **[Entrega Customizada](https://github.eduzz.com/eduzz/delivery_custom)**.

A chave para integração com o webhook pode ser visualizada em nossa plataforma no **[Órbita](https://orbita.eduzz.com/producer/config-api)**, ela será enviada no campo origin no payload do webhook.

**Essa informação permanece criptografada na Eduzz até o disparo para o cliente e só pode ser exibida pelo dono da conta ou uma conta com acesso via controle de acesso.**

**Ainda enviamos o campo api_key por motivos de compatibilidade, porém, ele não deve mais ser utilizado e será descontiunado em breve.**

## Guia de solução de problemas :interrobang:

Sempre ocorrerá erro de envio quando a URL cadastrada pelo produtor no webhook retornar qualquer status diferente da faixa de 200-299. [https://developer.mozilla.org/en-US/docs/Web/HTTP/Status](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status)

Quando isso ocorrer o serviço de webhook da Eduzz irá realizar 10 tentativas de envio do evento que falhou para a URL, caso a falha continue será marcada como falhando a URL, e os eventos futuros serão armazenado em um backup.

O serviço de webhook continuará disparando o primeiro evento que falhou durante 2 dias, até que a URL do produtor seja reestabelecida, assim que esse disparo retornar status code 200 novamente, o webhook irá reativar a URL e buscar todos os eventos salvos no backup  disparando eles novamente por ordem da data em que os eventos aconteceram.

Caso continue falhando após os 5 dias, a URL será desativada, os eventos salvos serão excluídos e o produtor notificado.

## Documentação dos campos e exemplos :page_with_curl:

**[Documentação dos campos enviados no webhook de fatura e contrato](campos-fatura.md)**\
**[Exemplo de código para receber webhook de fatura e contrato](exemplo-fatura.php)**

**[Documentação dos campos enviados no webhook de abandono](campos-abandono.md)**\
**[Exemplo de código para receber webhook de abandono de carrinho](exemplo-abandono.php)**

## Suporte

Usuários com problemas no webhook podem utilizar o suporte através dos nossos canais de atendimento no **[Órbita](https://orbita.eduzz.com)**.
