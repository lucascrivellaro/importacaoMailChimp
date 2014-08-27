<?php

if(isset($_POST['email']) && isset($_POST['nome'])){

$postdata = http_build_query(
		array(
				"apikey" => "392858b817640e1fcfbfe6595feb141e-us3",
				"id"=> get_field('id_da_lista'),
				"email" => array(
						"email" => $_POST['email'],
						"euid" => $_POST['nome'],
						"leid" => get_field('id_da_lista')
				),
				"merge_vars" => array(
						"FNAME" =>  $_POST['nome']
				),
				"email_type"=> "html",
				"double_optin"=> false,
				"update_existing"=> true,
				"replace_interests"=> true,
				"send_welcome"=> false
		)
);

$opts = array('http' =>
		array(
				'method'  => 'POST',
				'header'  => 'Content-type: application/x-www-form-urlencoded',
				'content' => $postdata
		)
);

$context  = stream_context_create($opts);

$result = file_get_contents('https://us3.api.mailchimp.com/2.0/lists/subscribe.json', false, $context);
$isca = get_field('isca_digital');

echo str_replace("}", ", \"url\":\"". $isca['url'] . "\"}" , $result);
}
	

?>


	Nome:*<br />
	<input type="text" id="" class="CampoForm" /><br />
	E-mail:*<br />
	<input type="text" id="" class="CampoForm" /><br />
	Telefone:*<br />
	<input type="text" id="" class="CampoForm" /><br />
	Empresa:*<br />
	<input type="text" id="" class="CampoForm" /><br />
	Ramo:*<br />
	<input type="text" id="" class="CampoForm" /><br />
	Cidade:*<br />
	<input type="text" id="" class="CampoForm" /><br />
	Assunto:*<br />
	<input type="radio" name="assunto" id="" >Desejo ser um representante<br />
	<input type="radio" name="assunto" id="" >Quero mais saude em minha empresa<br />
	<input type="radio" name="assunto" id="" >Quero um JuiceBox na minha casa<br />
	<input type="radio" name="assunto" id="" >Indique um cliente<br />
	<input type="radio" name="assunto" id="" >Assist&ecirc;ncia T&eacute;cnica<br />
	<input type="radio" name="assunto" id="" >Outro<br />
	<textarea rows="" cols="" class="CampoForm" style="margin-top:5px; height: 85px;"></textarea><br />
	<input type="button" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="rsform-submit-button">&nbsp;&nbsp;<input type="reset" value="Limpar" class="rsform-reset-button" />
	
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div> 
	
	
	
	<?php  include_once './script.php';?>	
	
<br />