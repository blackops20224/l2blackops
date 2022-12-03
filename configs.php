<?php

###########################################################
##                   Configurações                       ##
###########################################################
$server_name = 'L2BlackOps'; // Nome do servidor
$server_chronicle = 'High Five'; // Crônica do servidor
$server_url = 'l2blackops.lineageii.org'; // Digite exatamente o URL onde se encontra o site (exemplos: www.l2server.com/site OU www.l2server.com)


###########################################################
##                   Banco de dados                      ##
###########################################################
$host = 'l2blackops.ddns.net'; // Endereço de Host
$db = 'l2jdb'; // Nome do Banco de dados
$user = 'root'; // Usuário do Banco de dados
$pass = 'preto36342520'; // Senha do Banco de dados


###########################################################
##                    Server Status                      ##
###########################################################
$server_ip = '192.168.0.105'; // IP do DB (para buscar o status do servidor)
$gameport = '7777'; // porta do game

// Forçar o site a exibir um certo status (on = Online | off = Offline | auto = Status Real)
$force_server_status = 'off'; // Login Status (Padrão: auto)


###########################################################
##                Atualstudio Web Admin                  ##
###########################################################
$acpstts = 1; // Ativo(1) ou não(0)? (Padrão: 1)
$acppass = 'preto3'; // Senha de acesso ao painel admin do site


###########################################################
##                Configurações de email                 ##
###########################################################
$admin_email = 'vlw66@hotmail.com ou	
waldenaesantos@gmail.com '; // Endereço de email que os jogadores podem utilizar para entrar em contato
$server_email = 'vlw66@hotmail.com'; // Seu endereço de email utilizado para enviar emails automáticos (exemplo: nao-responda@seuservidor.com)
$vcmemail = 1; // É permitido criar várias contas com um mesmo email? (1 = Sim | 0 = Não)
$cofemail = 0; // Ao criar conta é necessário confirmar no email? (1 = Sim | 0 = Não)


###########################################################
##                        Captcha                        ##
###########################################################
// O captcha é um gerador de códigos que são obrigatórios o preenchimento ao se registrar, logar no painel admin e etc.
$captcha_register_on = 1; // Captcha no formulário de registro (1 = Sim | 0 = Não)
$captcha_cp_on = 1; // Captcha ao logar no painel de controle do usuário (1 = Sim | 0 = Não)
$captcha_forgotpass_on = 1; // Captcha ao enviar pedido de recuperação de conta para email (1 = Sim | 0 = Não)


###########################################################
##                     Diretórios                        ##
###########################################################
# Não esqueça de inserir barra (/) no final...
$dir_gallery = 'imgs/gallery/'; // Diretório das imagens da galeria
$dir_banners = 'imgs/banners/'; // Diretório das imagens dos banners
$dir_newsimg = 'imgs/news/'; // Diretório das imagens das notícias


###########################################################
##                Configurações extras                   ##
###########################################################
$olypoints_exib_config = 1; // Você quer que no ranking da Olympiad seja exibido os pontos dos players? (1 = Sim | 0 = Não)
$gmt = '0'; // Se o site estiver informando um horário adiantado ou atrasado, altere o GMT. Exemplo: -1 (-1 hora), +3 (+3 horas) e etc
$galleryMax = 30; // Número máximo de imagens e vídeos por página na galeria (é recomendado utilizar números múltiplos de 5). Padrão: 30
$passEncode = 1; // As senhas no banco de dados do servidor estão criptografadas ou não? (1 = Sim | 0 = Não)

// Locs X, Y e Z utilizados no script de unstuck char
$unstuck_loc_x = '83257'; // Padrão: 83257
$unstuck_loc_y = '149058'; // Padrão: 149058
$unstuck_loc_z = '-3400'; // Padrão: -3400

// Exibir box de Chat Online?
$chat_on = 1; // 1 = Sim | 0 = Não

// Página no Facebook:
$facePage = 'https://www.facebook.com/L2BlackOps/';

// Exibir box do Facebook na página inicial?
$face_on = 1; // 1 = Sim | 0 = Não

// Exibir quantidade de players online?
$explon = 1; // 1 = Sim | 0 = Não


###########################################################
##                  Painel do Usuário                    ##
###########################################################
$chaemail = 1; // Os jogadores podem alterar o email de suas contas? (1 = Sim | 0 = Não)


###########################################################
##                     Compra de Coins                   ##
###########################################################
$coinID = '40000'; // ID do item que será usado como Coins do servidor
$coinName = 'Donation Coin'; // nome completo das coins do servidor (Servidor Coin? Servidor Gold?) - NÃO COLOQUE NO PLURAL
$coinName_mini = 'Coin'; // nome resumido das coins do servidor (Coin? Gold?) - NÃO COLOQUE NO PLURAL

// Bonus ao comprar muitas coins (Ao comprar X coins o usuário ganha uma porcentagem a mais. Exemplo: A cada 100 coins, ganha 10%, ou seja, paga pelas 100, mas recebe 110. Paga por 1000 e recebe 1100...)
$buyCoins['bonus_count'][1] = '100'; // A partir de qual quantidade o bônus abaixo é dado?
$buyCoins['bonus_percent'][1] = '10'; // Qual a porcentagem de bonificação?
// 2:
$buyCoins['bonus_count'][2] = '400'; // A partir de qual quantidade o bônus abaixo é dado?
$buyCoins['bonus_percent'][2] = '15'; // Qual a porcentagem de bonificação?
// 3:
$buyCoins['bonus_count'][3] = '1000'; // A partir de qual quantidade o bônus abaixo é dado?
$buyCoins['bonus_percent'][3] = '20'; // Qual a porcentagem de bonificação?

// Preços (em coins) das opcoes do UCP Character Management
$ucp_price['unstuck'] 	= '1'; // opção unstuck
$ucp_price['karma'] 	= '1'; // opção remove karma
$ucp_price['punish'] 	= '2'; // opção remove punishment
$ucp_price['sex'] 		= '3'; // opção trocar sexo
$ucp_price['charname'] 	= '4'; // opção trocar nome do char
$ucp_price['clanname'] 	= '5'; // opção trocar nome do clan
$ucp_price['baseclass'] = '6'; // opção trocar baseclass


###########################################################
##              Entrega automática de Coins              ##
###########################################################
// PAGSEGURO CONFIGS:
$PagSeguro['email'] = 'vlw55@hotmail.com'; // Email da conta que receberá as doações
$PagSeguro['token'] = '74ff2ef5-2b5d-4633-9fad-05759518fddfc35e59b84971a3c58253678a0aca4ba4693c-47b3-4e7c-91c2-f3c93b036393'; // Token gerado no PagSeguro
$PagSeguro['token_sandbox'] = '___TOKEN_AQUI___'; // Token gerado no ambiente de testes do PagSeguro
$PagSeguro['testando'] = 0; // Está testando o sistema através do PagSeguro Sandbox? (1 = Sim | 0 = Não)
$PagSeguro['coin_price'] = '1.00'; // Preço das coins EM REAIS (é obrigatório usar número com 2 casas decimais separada por ponto. Exemplos: '1.00', '1.50', '2.00', etc)

// PAYPAL CONFIGS:
$PayPal['business_email'] = 'vlw55@hotmail.com'; // Email da conta que receberá as doações
$PayPal['currency'] = 'USD'; // Moeda utilizada no PayPal (Se modificar, deve ser modificado
$PayPal['currency_symbol'] = '$'; // Símbolo da moeda
$PayPal['coin_price'] = '1.00'; // Preço das coins (é obrigatório usar número com 2 casas decimais separada por ponto. Exemplos: '1.00', '1.50', '2.00', etc)


###########################################################
##        Configurações para cadastro no fórum           ##
###########################################################

// Banco de dados DO FÓRUM:
$f_host = 'l2blackops.ddns.net'; // Endereço de Host do fórum
$f_db = 'forum'; // Nome do Banco de dados do fórum
$f_user = 'root'; // Usuário do Banco de dados do fórum
$f_pass = 'preto36342520'; // Senha do Banco de dados do fórum
$f_pfx = 'ipb_'; // Prefixo das tabelas do fórum

// Link onde se encontram as regras do fórum (Se deixar vazio a opção de 'li e concordo com as regras' não aparecerá)
$fRulesURL = '#'; // (não esqueça do http:// no início. Ex: http://www.meusite.com/forum/...)


###########################################################
##                 Contagem regressiva                   ##
###########################################################
$counterActived = 1; // Ativar contagem regressiva na página inicial? 
$cDia = '19'; // Dia
$cMes = '10'; // Mês
$cAno = '2019'; // Ano
$cHor = '18'; // Hora
$cMin = '30'; // Minuto


