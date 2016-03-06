<?php
// Heading
$_['heading_title']                     = 'Importar item';
$_['text_openbay']                      = 'OpenBay Pro';
$_['text_ebay']                         = 'eBay';

// Text
$_['text_sync_import_line1']            = '<strong>Cuidado!</strong> Isto irá importar todos os seus produtos no eBay e construir uma estrutura de categorias na sua loja. É recomendável eliminar todas as categorias e produtos antes de executar essa opção. <br /> A estrutura de categorias é das categorias comuns do eBay, não das categorias da sua loja (se tiver uma loja eBay). Pode alterar o nome, remover e editar as categorias importadas sem afetar os seus produtos no eBay.';
$_['text_sync_import_line3']            = 'Certifique-se que o seu servidor pode aceitar e processar grandes tamanhos de dados POST. 1000 artigos do eBay resultam em cerca de 40Mb de tamanho. Com base nisso pode calcular o que necessita. Se o pedido falhar então é provável que a sua configuração seja muito pequena. O limite de memória do PHP deve ser aproximadamente 128Mb.';
$_['text_sync_server_size']             = 'Atualmente o seu servidor pode aceitar: ';
$_['text_sync_memory_size']             = 'Limite de memória PHP: ';
$_['text_import_confirm']				= 'Isto irá importar todos os seus itens do ebay como produtos novos, tem a certeza? Isto NÃO PODE ser revertido! CERTIFIQUE-SE que tem uma cópia de segurança primeiro!';
$_['text_import_notify']				= 'O seu pedido de importação foi enviada para processamento. Uma importação leva cerca de 1 hora para importar 1000 produtos.';
$_['text_import_images_msg1']           = 'Imagens estão com importação/cópia pendente do eBay. Recarregue esta página, se o número não diminuir';
$_['text_import_images_msg2']           = 'clique aqui';
$_['text_import_images_msg3']           = 'e espere. Mais informações sobre o que aconteceu podem ser encontradas <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">aqui</a>';

// Entry
$_['entry_import_item_advanced']        = 'Obter dados avançados';
$_['entry_import_categories']         	= 'Importar categorias';
$_['entry_import_description']			= 'Importar descrições do item';
$_['entry_import']						= 'Importar itens do eBay';

// Buttons
$_['button_import']						= 'Importar';

// Help
$_['help_import_item_advanced']        	= 'Vai demorar até 10 vezes mais para importar os itens. Importa pesos, tamanhos, ISBN e muito mais se estiver disponível';
$_['help_import_categories']         	= 'Constrói uma estrutura de categorias na sua loja a partir das categorias do eBay';
$_['help_import_description']         	= 'Isto vai importar tudo incluindo HTML, contadores de visita, etc';

// Error
$_['error_import']                   	= 'Falha ao carregar';
$_['error_maintenance']					= 'A sua loja está em modo de manutenção. A importação irá falhar!';
$_['error_ajax_load']					= 'Falha ao fazer a ligação ao servidor';
$_['error_validation']					= 'Tem de se registar para o seu token de API e ativar o módulo.';