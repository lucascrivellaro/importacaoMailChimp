<script>


if(isset($_POST['email']) && isset($_POST['nome'])){
	
	$postdata = http_build_query(
		array(
			"apikey" => "930047be9cbb73bb436bcc33e6e0b46f-us8",
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
}else{

	var validateEmail = function (email)
		{
			
			er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
			if(er.exec(email))
				return true;
			else
				return false;
		};
		
		var validateNome = function (nome)
		{
				return (nome!="");
		};

		$("#mc-embedded-subscribe").on('click', function(event){

				
				
				jQuery('#mce-error-response').html('');
				jQuery('#mce-error-response').css('display', 'none');
				if(validateNome(jQuery('#mce-FNAME').val())){
					
					if(validateEmail( jQuery('#mce-EMAIL').val())){
						
						
						jQuery("#mc-embedded-subscribe").val("Baixando...")
						
						
					}else{
						
						jQuery('#mce-error-response').html('E-mail inv&aacute;lido');
						jQuery('#mce-error-response').css('display', 'block');
					}
				}else{
					
					jQuery('#mce-error-response').html('Nome inv&aacute;lido');
					jQuery('#mce-error-response').css('display', 'block');
				
				}
			
			
			
			
		
	
	});
	
</script>