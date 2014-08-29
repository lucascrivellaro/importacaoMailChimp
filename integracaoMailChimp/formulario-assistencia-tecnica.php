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

	<label for="">Nome*</label>
	<input type="text" id="" class="CampoForm" name='nome'/>
	
	<label for="">Sobrenome*</label>
	<input type="text" id="" class="CampoForm" name='sobrenome'/>
		
	<label for="">Empresa*</label>
	<input type="text" id="" class="CampoForm" name='empresa'/>
	
	<label for="">Ramo*</label>
	<input type="text" id="" class="CampoForm" name='ramo'/>
	
	<label for="">DDD*</label>
	<input type="text" id="" class="CampoForm" name='ddd'/>
	
	<label for="">Telefone*</label>
	<input type="text" id="" class="CampoForm" name='telefone'/>
	
	<label for="">Mensagem</label>
	<textarea name='mensagem'></textarea><br />

	<input type="hidden" name="nomeLista" value="assistencia" />
	<input type="submit" value="Enviar Solicita&ccedil;&atilde;o">
	
	
	
	<?php  include_once './script.php';?>	
	
<br />