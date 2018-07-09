﻿=== Woo Gerencianet Oficial ===
Contributors: Gerencianet
Tags: woocommerce, gerencianet, payment, transparent checkout, card, billet, brazil, payments brazil
Requires at least: 4.1
Tested up to: 4.8.5
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Receba pagamentos por Boleto bancário e cartão de crédito em sua loja WooCommerce com a Gerencianet.

== Description ==

O módulo Gerencianet para WooCommerce permite receber pagamentos por meio do checkout transparente da nossa API.

= Descrição =

Este é o Módulo Oficial de integração fornecido pela [Gerencianet](https://gerencianet.com.br/) para WooCommerce. Com ele, o proprietário da loja pode optar por receber pagamentos  por  boleto bancário e/ou cartão de crédito. Todo processo é realizado por meio do checkout transparente. Com isso,  o comprador não precisa sair do site da loja para efetuar o pagamento.

O plugin é compatível com o plugin [WooCommerce Extra Checkout Fields for Brazil](http://wordpress.org/plugins/woocommerce-extra-checkout-fields-for-brazil/). Com esse módulo instalado, algumas informações como "CPF", "número do endereço" e "bairro" não serão solicitadas no momento do pagamento.

Caso você tenha alguma dúvida ou sugestão, entre em contato conosco pelo site [Gerencianet](https://gerencianet.com.br/).

= Compatibilidade =

Compatível com as versões 2.2.x, 2.3.x, 2.4.x, 2.5.x e 2.6.x do WooCommerce.

= Instalação =

1. Faça o download da última versão do plugin no repositório Wordpress.org ou no [repositório no GitHub](https://github.com/gerencianet/gn-api-woocommerce)
2. Acesse o link em sua loja "Plugins" -> "Adicionar novo" -> "Fazer o upload do plugin" e envie o arquivo 'woo-gerencianet-official.zip' ou extraia o conteúdo do arquivo dentro do diretório de plugins da loja.
3. Ative o plugin  e configure em "WooCommerce > Configurações > Finalizar Compra > Gerencianet" e comece a receber pagamentos.

Opcional: Instale o plugin [WooCommerce Extra Checkout Fields for Brazil](https://wordpress.org/plugins/woocommerce-extra-checkout-fields-for-brazil/) para evitar que o comprador tenha que inserir CPF, número do endereço e bairro no momento do pagamento.

= Configuração = 

1. Ative o módulo
2. Configure as credenciais de sua Aplicação Gerencianet. Para criar uma nova Aplicação, entre em sua conta Gerencianet, acesse o menu "API" e clique em "Minhas Aplicações" -> "Nova aplicação". Insira as credenciais Client ID e Client Secret de produção e desenvolvimento nos respectivos campos de configuração do plugin.
3. Insira o Payee Code (identificador) de sua conta Gerencianet.
4. Configure as opções de pagamento que deseja receber: Boleto e/ou Cartão de Crédito.
5. Defina se deseja aplicar desconto para pagamentos com Boleto, o modo de aplicar esse desconto e insira o número de dias corridos para vencimento.
6. Defina as instruções para pagamento no Boleto em quatro linhas de até 90 caracteres cada uma. Caso essas linhas não sejam definidas pelo lojista, será exibido no boleto as instruções padrões da Gerencianet.
7. Escolha se deseja que o plugin atualize os status dos pedidos da loja automaticamente, de acordo com as notificações de alteração do status da cobrança Gerencianet.
8. Escolha se deseja que o plugin atualize os status dos pedidos da loja automaticamente, de acordo com as notificações de alteração do status da cobrança Gerencianet.
9. Configure se deseja ativar o Sandbox (ambiente de testes).
10. Recomendamos que antes de disponibilizar pagamentos pela Gerencianet, o lojista realize testes de cobrança com o sandbox(ambiente de testes) ativado para verificar se o procedimento de pagamento está acontecendo conforme esperado.

= Changelog =

= 0.6.4 =
* Fix: Layout quebrado nos campos de detalhes da cobrança.

= 0.6.3 =
* Add: Internacionalization and translation template.

= 0.6.2 =
* Fix: Erro na máscara de CPF/CNPJ no checkout em um passo do plugin.

= 0.6.1 =
* Fix: Erros ao carregar objeto jquery da Gerencianet no checkout.

= 0.6.0 =
* Fix: Compatibilidade do módulo com WooCommerce 3.x e PHP 7.x
* Add: Atualização da identidade visual da Gerencianet.

= 0.5.3 =
* Fix: Layout quebrado da tela de checkout em um passo.
* Fix: Preenchimento automático de campos em compras exclusivas para Pessoa Física ou compras exlusivas para Pessoa Jurídica.

= 0.5.2 =
* Fix: Considera impostos do WooCommerce no boleto Gerencianet.
* Fix: Retira obrigatoriedade do campo referente a CPF nas compras de Pessoal Jurídica.

= 0.5.1 =
* Fix: Link para pagamento da cobrança.

= 0.5.0 =
* Added: Configuração das linhas de instrução presentes no Boleto bancário.
* Added: Opção da forma de aplicar desconto no boleto.

= 0.4.4 =
* Fix: Compatibilidade com versão 2.6.0 do WooCommerce.

= 0.4.3 =
* Fix: Correção layout responsivo.
* Fix: Compatibilidade.

= 0.4.2 =
* Fix: Bandeira dos cartões.
* Added: Validação da versão do PHP.

= 0.4.1 =
* Added: Opção de checkout na tela de Finalizar Compra.
* Added: Validação de credenciais na configuração do plugin.

= 0.3.1 =
* Added: Validações antes de exibir campos no formulário de pagamento e otimização no preenchimento dos dados.
* Fix: Máscara de campos obrigatórios.

= 0.3.0 =
* Modificação na atualização do status do pedido de acordo com o pagamento: A partir da versão 0.3.0, o status do pedido será modificado para "Aguardando" quando o cliente gerar a cobrança com cartão de crédito ou boleto bancário. Caso a configuração de atualização de status automática estiver ativa, quando o pagamento for confirmado o status do pedido será alterado para "Processando".

= 0.2.3 =
* Fix: especificações de mensagem de erros durante pagamento.

= 0.2.2 =
* Fix: correção de versão

= 0.2.1 =
* Fix: mensagens de erros durante pagamento.
* Fix: estilos no formulário de pagamento.

= 0.2.0 =
* Fix: erros de javascript e styles; optimização de layout de pagamento via cartão de crédito.

= 0.1.2 =
* Fix: erro de compatibilidade

= 0.1.1 =
* Versão Beta disponibilizada.

== Installation ==

1. Faça o download da última versão do plugin no repositório Wordpress.org ou no [repositório no GitHub](https://github.com/gerencianet/gn-api-woocommerce)
2. Acesse o link em sua loja "Plugins" -> " "Adicionar novo" -> "Fazer o upload do plugin" e envie o arquivo 'woo-gerencianet-official.zip' ou extraia o conteúdo do arquivo dentro do diretório de plugins da loja.
3. Ative o plugin  e configure em "WooCommerce > Configurações > Finalizar Compra > Gerencianet" e comece a receber pagamentos.

Opcional: Instale o plugin [WooCommerce Extra Checkout Fields for Brazil](https://wordpress.org/plugins/woocommerce-extra-checkout-fields-for-brazil/) para evitar que o comprador tenha que inserir CPF, número do endereço e bairro no momento do pagamento.

= Configuração = 

1. Ative o módulo
2. Configure as credenciais de sua Aplicação Gerencianet. Para criar uma nova Aplicação, entre em sua conta Gerencianet, acesse o menu "API" e clique em "Minhas Aplicações" -> "Nova aplicação". Insira as credenciais Client ID e Client Secret de produção e desenvolvimento nos respectivos campos de configuração do plugin.
3. Insira o Payee Code (identificador) de sua conta Gerencianet.
4. Configure as opções de pagamento que deseja receber: Boleto e/ou Cartão de Crédito.
5. Defina se deseja aplicar desconto para pagamentos com Boleto, o modo de aplicar esse desconto e insira o número de dias corridos para vencimento.
6. Defina as instruções para pagamento no Boleto em quatro linhas de até 90 caracteres cada uma. Caso essas linhas não sejam definidas pelo lojista, será exibido no boleto as instruções padrões da Gerencianet.
7. Escolha se deseja que o plugin atualize os status dos pedidos da loja automaticamente, de acordo com as notificações de alteração do status da cobrança Gerencianet.
8. Escolha se deseja que o plugin atualize os status dos pedidos da loja automaticamente, de acordo com as notificações de alteração do status da cobrança Gerencianet.
9. Configure se deseja ativar o Sandbox (ambiente de testes).
10. Recomendamos que antes de disponibilizar pagamentos pela Gerencianet, o lojista realize testes de cobrança com o sandbox(ambiente de testes) ativado para verificar se o procedimento de pagamento está acontecendo conforme esperado.

== Changelog ==

= 0.6.4 =
* Fix: Layout quebrado nos campos de detalhes da cobrança.

= 0.6.3 =
* Add: Internacionalization and translation template.

= 0.6.2 =
* Fix: Erro na máscara de CPF/CNPJ no checkout em um passo do plugin.

= 0.6.1 =
* Fix: Erros ao carregar objeto jquery da Gerencianet no checkout.

= 0.6.0 =
* Fix: Compatibilidade do módulo com WooCommerce 3.x e PHP 7.x
* Add: Atualização da identidade visual da Gerencianet.

= 0.5.3 =
* Fix: Layout quebrado da tela de checkout em um passo.
* Fix: Preenchimento automático de campos em compras exclusivas para Pessoa Física ou compras exlusivas para Pessoa Jurídica.

= 0.5.2 =
* Fix: Considera impostos do WooCommerce no boleto Gerencianet.
* Fix: Retira obrigatoriedade do campo referente a CPF nas compras de Pessoal Jurídica.

= 0.5.1 =
* Fix: Link para pagamento da cobrança.

= 0.5.0 =
* Added: Configuração das linhas de instrução presentes no Boleto bancário.
* Added: Opção da forma de aplicar desconto no boleto.

= 0.4.4 =
* Fix: Compatibilidade com versão 2.6.0 do WooCommerce

= 0.4.3 =
* Fix: Correção layout responsivo.
* Fix: Compatibilidade.

= 0.4.2 =
* Fix: Bandeira dos cartões.
* Added: Validação da versão do PHP.

= 0.4.1 =
* Added: Opção de checkout na tela de Finalizar Compra.
* Added: Validação de credenciais na configuração do plugin.

= 0.3.1 =
* Added: Validações antes de exibir campos no formulário de pagamento e otimização no preenchimento dos dados.
* Fix: Máscara de campos olbrigatórios

= 0.3.0 =
* Modificação na atualização do status do pedido de acordo com o pagamento: A partir da versão 0.3.0, o status do pedido será modificado para "Aguardando" quando o cliente gerar a cobrança com cartão de crédito ou boleto bancário. Caso a configuração de atualização de status automática estiver ativa, quando o pagamento for confirmado o status do pedido será alterado para "Processando".

= 0.2.3 =
* Fix: especificações de mensagem de erros durante pagamento.

= 0.2.2 =
* Fix: correção de versão

= 0.2.1 =
* Fix: mensagens de erros durante pagamento.
* Fix: estilos no formulário de pagamento.

= 0.2.0 =
* Fix: erros de javascript e styles; optimização de layout de pagamento via cartão de crédito.

= 0.1.2 =
* Fix: erro de compatibilidade

= 0.1.1 =
* Versão Beta disponibilizada.
