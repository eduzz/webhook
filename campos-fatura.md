# Documentação de eventos de alteração no status da fatura

Para se integrar com eventos do tipo fatura, deve ser seguida a documentação abaixo.
Ela descreve quais campos e quais tipos de dados serão enviados a url cadastrada.

Os eventos são enviados toda vez que o status de uma fatura é atualizado (campo trans_status).

Os status da fatura podem serem consultados na tabela de status de faturas.

Parâmetro     | Descrição	| Tipo de Variável
------------- | -------------	| -----------------
aff_cod | Id do afiliado | Int?
aff_document_number | Documento do afiliado | String?
aff_email | E-mail do afiliado | String?
aff_name |  Nome do afiliado | String?
aff_value | Valor da comissão do afiliado | Float?
billet_url | Página com a chave gerada para o produto | String
cus_address | Endereço do cliente | String
cus_address_city | Cidade do cliente | String
cus_address_comp | Complemento do endereço do cliente | String
cus_address_country | País do cliente | String
cus_address_district | Bairro do cliente | String
cus_address_number | Numero do endereço do cliente | String
cus_address_state | Estado do clieente | String
cus_address_zip_code | CEP do cliente | String
cus_cel | Celular do cliente | String
cus_tel | Telefone do cliente | String
cus_tel2 | Segundo telefone do cliente | String
cus_cod | Id do cliente na Eduzz | Int
cus_email | E-mail do cliente | String
cus_name | Nome do cliente | String
cus_taxnumber | Documento do cliente | String
eduzz_value | Taxa cobrada pela Eduzz | Float
page_checkout_url | URL do Checkout | String
pro_document_number | Documento do produtor | String
pro_email | E-mail do produtor | String
pro_name | Nome do produtor | String
pro_value | Valor da comissão do produtor | Float
origin_secret | **[Token](https://orbita.eduzz.com/producer/config-api)** de segurança do webhook | string
cop_value | Valor da comissão do coprodutor | Float?
partner_cod | Id do parceiro do primeiro Item | Number?
other_values | Taxas adicionais | Float?
product_cod | ID do produto | Int
product_name | Nome do produto | String
product_refund | Prazo em dias para reembolso do produto |  Int
product_parent_cod | ID do produto pai (apenas para variações) | Int?
discount_coupon_code | Código do Cupom de Desconto utilizado (ou Vazio caso não utilizou) | String?
trans_bankslip | Url para acesso ao boleto caso seja um pagamento via boleto | String
recurrence_cod | Id do contrato | Int?
type | Tipo da integração (invoice, contract ou abandonment) | String
recurrence_count | Quantidade de cobranças já realizadas | Int?
recurrence_interval | Intervalo da recorrencia | Int?
recurrence_interval_type | Tipo de intervalo (Caso o campo **recurrence_interval** sejá 1 e o campo atual for 'month', significa que a cobrança é feita 1 vez ao mês, valores possíveis: day (Cobrança diária), month (Mensal), Year (Anual) | String?
recurrence_first_payment | Informa ao cliente se aquele contrato é o evento de criação do contrato (primeiro pagamento) | Number
recurrence_plan | Nome do plano da recorrencia | String?
recurrence_startdate | Data de inicio da cobrança | String?
recurrence_status | Id do [Status do contrato](#tabela de status de contratos) caso seja recorrência  | Int?
recurrence_status_name | Nome do status do contrato | String?
recurrence_type | Indica se é a assinatura 2.0 | String?
recurrence_canceled_at | Caso a assinatura esteja cancelada indica a data de cancelamento | String?
recurrence_finishes_at | Data final do contrato | String?
recurrence_is_infinite | O contrato é infinito? | Boolean
sku_reference | Referência externa | String
refund_date | Caso a fatura esteja reembolsada informada a data | String
student_cod | Código do aluno | Int?
student_taxnumber | Documento do aluno | String?
student_name | Nome do aluno | String?
student_email | E-mail do aluno | String?
pro_cod | Id do Produtor | Number?
student_tel | Telefone do aluno | String?
notification_url | Url de postback caso existente | String?
student_tel2 | Segundo telefone do aluno | String?
student_cel | Celular do aluno | String?
tracker_trk |  Parâmetro genérico 1 | String?
tracker_trk2 | Parâmetro genérico 2 | String?
tracker_trk3 | Parâmetro genérico 3 | String?
tracker_utm_campaign | UTM Campaing | String?
tracker_utm_content | UTM Content | String?
tracker_utm_medium | UTM Medium | String?
tracker_utm_source | UTM Source | String?
trans_barcode | codigo de barra do boleto|String?
trans_cod | Id da fatura | Int
event_name | Nom do evento que foi enviado (cart_abandonment) | String
trans_createdate | Data de criação da fatura | String
trans_createtime | Hora de criação da fatura | String
trans_currency | Moeda utilizada na transação|String
trans_duedate | Data limite para o pagamento da fatura |S tring
trans_duetime | Horario limite para o pagamento da fatura | String
trans_key | Chave da transação gerada pelo checkout na geração de fatura | String
trans_orderid | ID da Ordem |Int
trans_paid | Valor pago |Float
trans_paiddate | Data ddo pagamento | String?
trans_paidtime | Hora de pagamento | String?
trans_paymentmethod | [Forma de pagamento](#tabela-de-formas-de-pagamento) | Int?
trans_recovered | Fatura foi recuperada | Boolean
trans_recovery_url | Link de recuperação | String
trans_status | [Status da fatura](#tabela-de-status-de-faturas) | Int
trans_value | Valor da venda | Float?
trans_items | Array contendo os itens da fatura como descrito abaixo|Array
trans_items[][item_id] | Id do item | Int
trans_items[][item_name] | Nome do item | String
trans_items[][item_value] | Valor do item | Float
trans_items[][item_coupon_code] | Código do cupom que foi aplicado no item | String?
trans_items[][item_coupon_value] | Valor descontado do cupom no item | Float?
trans_items[][item_product_id] | ID do produtor do item | Int
trans_items[][item_product_name] | Nome atual do produto do item | String
trans_items[][item_product_refund] | Prazo em dias para reembolso do produto do item | Int
trans_items[][item_product_sku_reference] | Referência externa do produto do item | String?
trans_items[][item_product_partner_cod] | Caso seja um produto de parceiro, contém o código dele | Int?
trans_items[][item_product_chargetype] | [Tipo da cobrança do produto](#tabela-de-tipos-de-cobranca-de-produto) | String?
trans_items_quantity | Quantidade de itens da venda|Float
trans_job_id | Id Ordem do serviço (Job) |Int?
trans_job_status | Id Status da ordem do serviço (Job) |Int?
*api_key* | *Token antigo segurança do produtor ou afiliado apenas para motivos de referência **(será descontinuado em breve)*** | *String*
event_name | Nome do evento que foi enviado | String

## Tabela de Nomes de Eventos (event_name)

**Fatura**

event_name | Momento do envio
--- | ---
invoice_open | Quando uma fatura é aberta (boleto é gerado ou uma nova transação de contrato é gerada)
invoice_processing | Fatura Está em processamento
invoice_paid | Fatura está pagada
invoice_canceled | Fatura está cancelada
invoice_waiting_documents | Fatura está aguardando os documentos para processo de reembolso
invoice_waiting_refund | Reembolso foi aprovado e a fatura está agurdando ser reembolsada
invoice_refunded | Fatura foi reembolsada
invoice_analysing | Fatura está em análise
invoice_duplicated | Fatura foi identificada como duplicada e foi cancelada
invoice_expired | Data de pagamento da fatura expirou
invoice_recovering | Fatura entrou em recuperação de Vendas
invoice_trial | Fatura entrou em modo de trial
invoice_deleted | Fatura foi excluída, contatar time de Suporte
invoice_waiting_payment | Fatura está aguardando pagamento
invoice_refused | Cartão de crédito recusado no meio de pagamento
invoice_overdue | Fatura expirou
invoice_scheduled | Fatura está agendada para alguma data específica
invoice_negociated | Fatura entrou em disputa pelo cliente
contract_up_to_date | Enviado quando o contrato está em dia (foi pago e processado corretamente no último pagamento)
contract_waiting_payment | Contrato está aguardando o pagamento da parcela atual
contract_suspended | Contrato foi suspenso pela Eduzz ou produtor
contract_canceled | Contrato foi cancelado pela Eduzz ou produtor
contract_delayed | Contrato será processado no futuro
contract_finished | Contrato encerrado
contract_trial | Contrato entrou em modo trial
contract_overdue | Contrato entrou em atraso
contract_free | Contrato é gratuito
contract_next_charge | Data da próxima cobrança do contrato

## Tabela de status de faturas

Campo: **trans_status**

ID  | Status | Descrição
--- | ------ | -----------
1 | Aberta | Fatura aberta, cliente gerou boleto, mas ainda não foi compensado
3 | Paga | Compra foi paga, o cliente já esta apto a receber o produto
4 | Cancelada | Fatura Cancelada pela Eduzz
6 | Aguardando Reembolso | Cliente solicitou reembolso, porem o mesmo ainda não foi efetuado
7 | Reembolsado | Cliente já foi reembolsado pela eduzz
9 | Duplicada | Cliente tentou comprar mais de uma vez o mesmo produto, a segunda fatura fica como duplicada e não é cobrada.
10 | Expirada | A fatura que fica mais de 15 dias aberta é alterada para expirada.
11 | Em Recuperacao | Fatura entrou para o processo de recuperação
15 | Aguardando Pagamento | Faturas de recorrência após o vencimento ficam com o status aguardando pagamento

## Tabela de formas de pagamento

Campo: **trans_paymentmethod**

ID	| Forma de pagamento
----	| -----
1 	| Boleto Bancário
9 	| Paypal
11 	| Desconhecido
13 	| Visa
14	| Amex
15 	| Mastercard
16 	| Diners
17 	| Débito Banco do Brasil
18 	| Débito Bradesco
19 	| Débito Itaú
21 	| Hipercard
22 	| Débito Banrisul
23 	| Hiper
24 	| Elo
25 	| Paypal Internacional
27 	| Múltiplos Cartões
32  | PIX

## Tabela de tipos de cobrança de produto

Campo: **item_product_chargetype**

SIGLA   | Tipo
-----   | ------
N       | Cobrança única
A       | Assinatura
L       | Outros
G       | Gratuita (Valor R$ 0,00)

## Tabela de status de contratos

Campo: **recurrence_status**

ID  | Status | Descrição
--- | ------ | -----------
1 | Em Dia | Contrato com pagamento em dia.
2 | Aguardando Pagamento | Esse status é acionado após o vencimento da fatura. Permanece por 3 dias.
3 | Suspenso | O contrato não gera novas cobranças. Pode ser reativado.
4 | Cancelado | O contrato do cliente foi cancelado.
7 | Atrasado | Contrato sem pagamento há mais de 3 dias após o vencimento.
9 | Finalizado | Todos os pagamentos foram realizados. Não gera novas cobranças.
10 | Trial | Contrato em período de trial.
