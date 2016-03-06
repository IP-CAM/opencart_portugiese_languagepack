<?php
// Heading
$_['heading_title']					= 'WebService API de Ligação First Data EMEA';

// Text
$_['text_firstdata_remote']			= '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_payment']					= 'Pagamento';
$_['text_success']					= 'Sucesso: os detalhes da conta do First Data foram alterados!';
$_['text_edit']                     = 'Editar WebService API de Ligação First Data EMEA';
$_['text_card_type']				= 'Tipo de cartão';
$_['text_enabled']					= 'Ativado';
$_['text_merchant_id']				= 'ID da loja';
$_['text_subaccount']				= 'Conta secundária';
$_['text_user_id']					= 'ID de utilizador';
$_['text_capture_ok']				= 'Captura com sucesso';
$_['text_capture_ok_order']			= 'A captura foi bem sucedida, o estado da encomenda foi  atualizado para sucesso - liquidado';
$_['text_refund_ok']				= 'Reembolso bem sucedido';
$_['text_refund_ok_order']			= 'Reembolso bem sucedido, o estado da encomenda foi atualizado para reembolsado';
$_['text_void_ok']					= 'Anulação bem sucedida, o estado da encomenda foi alterado para anulado';
$_['text_settle_auto']				= 'Venda';
$_['text_settle_delayed']			= 'Pré-autenticado';
$_['text_mastercard']				= 'MasterCard';
$_['text_visa']						= 'Visa';
$_['text_diners']					= 'Diners';
$_['text_amex']						= 'American Express';
$_['text_maestro']					= 'Maestro';
$_['text_payment_info']				= 'Informações de pagamento';
$_['text_capture_status']			= 'Pagamento capturado';
$_['text_void_status']				= 'Pagamento anulado';
$_['text_refund_status']			= 'Pagamento reembolsado';
$_['text_order_ref']				= 'Referência da encomenda';
$_['text_order_total']				= 'Total autorizado';
$_['text_total_captured']			= 'Total capturado';
$_['text_transactions']				= 'Transações';
$_['text_column_amount']			= 'Montante';
$_['text_column_type']				= 'Tipo';
$_['text_column_date_added']		= 'Criado a';
$_['text_confirm_void']				= 'Tem a certeza que deseja anular o pagamento?';
$_['text_confirm_capture']			= 'Tem a certeza que deseja capturar o pagamento?';
$_['text_confirm_refund']			= 'Tem a certeza que deseja reembolsar o pagamento?';

// Entry
$_['entry_certificate_path']		= 'Caminho do certificado';
$_['entry_certificate_key_path']	= 'Caminho da chave privada';
$_['entry_certificate_key_pw']		= 'Palavra-chave da Chave Privada';
$_['entry_certificate_ca_path']		= 'Caminho da Autoridade de Certificação (CA)';
$_['entry_merchant_id']				= 'ID da loja';
$_['entry_user_id']					= 'ID de utilizador';
$_['entry_password']				= 'Palavra-chave';
$_['entry_total']					= 'Total';
$_['entry_sort_order']				= 'Ordenação';
$_['entry_geo_zone']				= 'Zona geográfica';
$_['entry_status']					= 'Estado';
$_['entry_debug']					= 'Registos de depuração (debug)';
$_['entry_auto_settle']				= 'Tipo de liquidação';
$_['entry_status_success_settled']	= 'Sucesso - liquidado';
$_['entry_status_success_unsettled'] = 'Sucesso - não liquidado';
$_['entry_status_decline']			 = 'Recusar';
$_['entry_status_void']				 = 'Anulado';
$_['entry_status_refund']			 = 'Reembolsado';
$_['entry_enable_card_store']		 = 'Ativar tokens de armazenamento no cartão';
$_['entry_cards_accepted']			 = 'Tipos de cartão aceites';

// Help
$_['help_total']					 = 'O total que a encomenda deve atingir para que este método de pagamento fique disponível';
$_['help_certificate']				 = 'Os certificados e as chaves privadas devem ser armazenadas fora das suas pastas públicas na rede';
$_['help_card_select']				 = 'Perguntar ao utilizador para escolher o seu tipo de cartão, antes de eles serem redirecionados';
$_['help_notification']				 = 'Tem de fornecer este URL à First Data para receber as notificações de pagamento';
$_['help_debug']					 = 'Ao ativar o modo de depuração (debug) serão gravadas informações privadas sensíveis. Deve ativar este modo temporariamente apenas para resolver problemas por questões de segurança .';
$_['help_settle']					 = 'Se usar a pré-autenticação deve concluir a ação pós-autenticação dentro de 3-5 dias caso contrário a sua transação será cancelada';

// Tab
$_['tab_account']					 = 'Informação de API';
$_['tab_order_status']				 = 'Estado da encomenda';
$_['tab_payment']					 = 'Configurações de pagamento';

// Button
$_['button_capture']				= 'Capturar';
$_['button_refund']					= 'Reembolsar';
$_['button_void']					= 'Anular';

// Error
$_['error_merchant_id']				= 'É necessário o ID da loja';
$_['error_user_id']					= 'É necessário o ID de utilizador';
$_['error_password']				= 'É necessária a palavra-chave';
$_['error_certificate']				= 'É necessário o caminho do certificado';
$_['error_key']						= 'É necessária a chave do certificado';
$_['error_key_pw']					= 'É necessária a palavra-chave da chave do certificado';
$_['error_ca']						= 'É necessária a Autoridade de Certificação (CA)';