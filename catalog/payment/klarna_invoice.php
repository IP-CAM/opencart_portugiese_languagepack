<?php
// Text
$_['text_title']				= 'Fatura Klarna - Pague dentro de 14 dias';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'A Fatura Klarna necessita de informação adicional antes de processar a sua encomenda.';
$_['text_male']					= 'Masculino';
$_['text_female']				= 'Feminino';
$_['text_year']					= 'Ano';
$_['text_month']				= 'Mês';
$_['text_day']					= 'Dia';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Género';
$_['entry_pno']					= 'Número Bilhete de Identidade';
$_['entry_dob']					= 'Data de Nascimento';
$_['entry_phone_no']			= 'Número de telefone';
$_['entry_street']				= 'Rua';
$_['entry_house_no']			= 'Número de porta';
$_['entry_house_ext']			= 'Número adicional de porta';
$_['entry_company']				= 'NIF';

// Help
$_['help_pno']					= 'Por favor introduza aqui o seu número de segurança social.';
$_['help_phone_no']				= 'Por favor introduza o seu número de telefone.';
$_['help_street']				= 'Por favor note que a entrega só ocorrerá no endereço registado ao pagar com Klarna.';
$_['help_house_no']				= 'Por favor introduza o número de porta.';
$_['help_house_ext']			= 'Por favor introduza o número adicional de porta, como por exemplo o andar, entrada, etc.';
$_['help_company']				= 'Por favor introduza o NIF (número de identificação fiscal) da sua empresa.';

// Error
$_['error_deu_terms']			= 'Tem de concordar com a política de privacidade da Klarna (Datenschutz)';
$_['error_address_match']		= 'Os endereços de faturação e entrega tem de ser iguais se quiser usar a fatura Klarna.';
$_['error_network']				= 'Surgiu um erro ao estabelecer a ligação à Klarna. Por favor tente de novo mais tarde.';