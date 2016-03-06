<?php
// Heading
$_['heading_title']					 = 'Realex Redirect';

// Text
$_['text_payment']				  	 = 'Pagamento';
$_['text_success']					 = 'Sucesso: os detalhes da conta Realex foram alterados!';
$_['text_edit']                      = 'Editar Realex Redirect';
$_['text_live']						 = 'Ao vivo';
$_['text_demo']						 = 'Demonstração';
$_['text_card_type']				 = 'Tipo de cartão';
$_['text_enabled']					 = 'Ativado';
$_['text_use_default']				 = 'Usar padrão';
$_['text_merchant_id']				 = 'ID do Vendedor';
$_['text_subaccount']				 = 'Sub-conta';
$_['text_secret']					 = 'Segredo partilhado';
$_['text_card_visa']				 = 'Visa';
$_['text_card_master']				 = 'Mastercard';
$_['text_card_amex']				 = 'American Express';
$_['text_card_switch']				 = 'Switch/Maestro';
$_['text_card_laser']				 = 'Laser';
$_['text_card_diners']				 = 'Diners';
$_['text_capture_ok']				 = 'A captura foi bem sucedida';
$_['text_capture_ok_order']			 = 'A captura foi bem sucedida, o estado da encomenda foi alterado para liquidado';
$_['text_rebate_ok']				 = 'A devolução foi bem sucedida';
$_['text_rebate_ok_order']			 = 'A devolução foi bem sucedida, o estado da encomenda foi alterado para devolvido';
$_['text_void_ok']					 = 'A anulação foi bem sucedida, o estado da encomenda foi alterado para anulado';
$_['text_settle_auto']				 = 'Automático';
$_['text_settle_delayed']			 = 'Adiado';
$_['text_settle_multi']				 = 'Múltiplo';
$_['text_url_message']				 = 'Tem de fornecer o URL da loja no gestor da conta Realex antes de ativar este método de pagamento';
$_['text_payment_info']				 = 'Informações de pagamento';
$_['text_capture_status']			 = 'Pagamento capturado';
$_['text_void_status']				 = 'Pagamento anulado';
$_['text_rebate_status']			 = 'Pagamento reembolsado';
$_['text_order_ref']				 = 'Ref da encomenda';
$_['text_order_total']				 = 'Total autorizado';
$_['text_total_captured']			 = 'Total capturado';
$_['text_transactions']				 = 'Transações';
$_['text_column_amount']			 = 'Montante';
$_['text_column_type']				 = 'Tipo';
$_['text_column_date_added']		 = 'Criado';
$_['text_confirm_void']				 = 'Tem a certeza que quer anular o pagamento?';
$_['text_confirm_capture']			 = 'Tem a certeza que quer capturar o pagamento?';
$_['text_confirm_rebate']			 = 'Tem a certeza que quer reembolsar o pagamento?';
$_['text_realex']					 = '<a target="_blank" href="http://www.realexpayments.co.uk/partner-refer?id=opencart"><img src="view/image/payment/realex.png" alt="Realex" title="Realex" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant_id']				 = 'ID do Vendedor';
$_['entry_secret']					 = 'Segredo partilhado';
$_['entry_rebate_password']			 = 'Palavra-chave de reembolso';
$_['entry_total']					 = 'Total';
$_['entry_sort_order']				 = 'Ordenação';
$_['entry_geo_zone']				 = 'Zona Geográfica';
$_['entry_status']					 = 'Estado';
$_['entry_debug']					 = 'Registos de depuração (debug)';
$_['entry_live_demo']				 = 'Ao vivo / demonstração';
$_['entry_auto_settle']				 = 'Tipo de liquidação';
$_['entry_card_select']				 = 'Selecione o cartão';
$_['entry_tss_check']				 = 'Verificações TSS';
$_['entry_live_url']				 = 'URL de ligação ao vivo';
$_['entry_demo_url']				 = 'URL de ligação da demonstração';
$_['entry_status_success_settled']	 = 'Sucesso - liquidado';
$_['entry_status_success_unsettled'] = 'Sucesso - não liquidado';
$_['entry_status_decline']			 = 'Recusar';
$_['entry_status_decline_pending']	 = 'Recusar - auth desligado';
$_['entry_status_decline_stolen']	 = 'Recusar - cartão perdido ou roubado';
$_['entry_status_decline_bank']		 = 'Recusar - erro do banco';
$_['entry_status_void']				 = 'Anulado';
$_['entry_status_rebate']			 = 'Reembolsado';
$_['entry_notification_url']		 = 'URL de notificação';

// Help
$_['help_total']					 = 'O total que a encomenda deve atingir para que este método de pagamento fique disponível';
$_['help_card_select']				 = 'Perguntar ao utilizador para escolher o tipo de cartão a usar antes de ser redirecionado';
$_['help_notification']				 = 'Tem de fornecer este URL à Realex para receber notificações de pagamentos';
$_['help_debug']					 = 'Importante: ao ativar o modo de depuração (debug) serão gravadas informações privadas sensíveis num ficheiro. Deve ativar este modo temporariamente apenas para resolver problemas por questões de segurança';
$_['help_dcc_settle']				 = 'Se a sua sub-conta tiver o DCC ativado, tem de usar Liquidar automaticamente';

// Tab
$_['tab_api']					     = 'Detalhes API';
$_['tab_account']		     		 = 'Contas';
$_['tab_order_status']				 = 'Estado da encomenda';
$_['tab_payment']					 = 'Definições de pagamento';
$_['tab_advanced']					 = 'Avançado';

// Button
$_['button_capture']				 = 'Capturar';
$_['button_rebate']					 = 'Devolver / reembolsar';
$_['button_void']					 = 'Anular';

// Error
$_['error_merchant_id']				 = 'É necessário o ID do Vendedor';
$_['error_secret']					 = 'É necessário o segredo partilhado';
$_['error_live_url']				 = 'É necessário o URL ao vivo';
$_['error_demo_url']				 = 'É necessário URL de demonstração';
$_['error_data_missing']			 = 'Faltam dados';
$_['error_use_select_card']			 = 'Tem de ter ativado "Selecionar Cartão" para roteamento de sub-conta por tipo de cartão para que funcione';