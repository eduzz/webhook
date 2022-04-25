# Documentação dos campos de fatura

Para integrações de abandono, será enviado um evento contendo os campos abaixo, onde o evento representa um comprador que abandonou um carrinho antes da finalização da compra.

Parâmetro | Descrição | Tipo
--------- | --------- | ----
identifier | Id do lead na Eduzz | String
cartAccessedAt | Data em que o cliente abriu o carrinho | Date
producerId | Id do produtor | Number
product.id | Id do produto | Number
product.title | Nome do produto | String
campaign.id | Id da campanha | Number
campaign.title | Chave da campanha | String
affiliate.id | Id do affiliado | Number?
affiliate.name | Nome do affiliado | String?
customer.name | Nome do comprador | String
customer.email | E-mail do comprador | String
customer.phone | Telefone do comprador | String