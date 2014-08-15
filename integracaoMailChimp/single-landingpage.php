<?php

	

	if(isset($_POST['email']) && isset($_POST['nome'])):
	
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
	else:
?>
<?php get_header(); ?> 

    <div class="container container_block landing-page default"> 
        <div class='header'>
			<h1><?php the_title(); ?></h1>
			
			<h2><?php echo get_field('subttitulo'); ?></h2>
		</div>
		
		<div class='content'>
			<div class='chamada'>
				<?php
				
				if( has_post_thumbnail())
					the_post_thumbnail();
				?>
			
			</div>
			
			<div class="formulario">
				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					#mc_embed_signup{clear:left; font:14px Helvetica,Arial,sans-serif; }
					
				</style>
				<div id="mc_embed_signup" class="inner-form">
					
					<?php the_content(); ?>
					
					<h2></h2>
					<div class="indicates-required"><span class="asterisk">*</span> Campos Obrigat&oacute;rios</div>
					<div class="mc-field-group">
							<label for="mce-FNAME">Nome  <span class="asterisk">*</span>
							</label>
							<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
					</div>
					<div class="mc-field-group">
						<label for="mce-EMAIL">Email  <span class="asterisk">*</span>
						</label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;"><input type="text" name="b_a91c1afaf97acab8a1d2b01b4_ada648891d" value=""></div>
					<div class="clear"><input type="button" value="Baixar Arquivo" name="subscribe" id="mc-embedded-subscribe" class="button"></div>

				</div>


			</div>
		</div>
		

		<script>
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

			jQuery("#mc-embedded-subscribe").on('click', function(event){
					
					jQuery('#mce-error-response').html('');
					jQuery('#mce-error-response').css('display', 'none');
					if(validateNome(jQuery('#mce-FNAME').val())){
						
						if(validateEmail( jQuery('#mce-EMAIL').val())){
							
							
							jQuery("#mc-embedded-subscribe").val("Baixando...")
							jQuery.ajax({
									/*url: 'https://us3.api.mailchimp.com/2.0/lists/subscribe.json',*/
									data: {
										nome:  jQuery('#mce-FNAME').val(),
										email:  jQuery('#mce-EMAIL').val()
									},
									dataType: 'json',
									async:true,
									type: 'post',
									crossDomain : true,
									success: function(e){
										jQuery.ajax({
											url:'https://www.digitallhub.com.br/api/conversao',
											data:{hub_cliente_key: 'cbe6f204594132558016413b930b4f16',
												hub_equipe_key: '2989c448be1c123719adf0a3c033991c',
												tipo: '<?php echo get_field('tipo_pagina')?>',
												identificador: 'LP - <?php echo get_the_title();?>',												
												retorno: 'http://www.contentsys.com.br',
												nome: jQuery('#mce-FNAME').val(),
												email: jQuery('#mce-EMAIL').val(),
												c_utmz: jQuery('#c_utmz').val()
											},
											scriptCharset: 'utf-8',
											async:false,
											type:'post'}
										);
										//jQuery('#mce-success-response').html('Obrigado. O conteúdo será enviado para o seu e-mail em até uma hora.');
										//jQuery('#mce-success-response').css('display', '');
										window.location = e.url;
									}
									
									
									
								
							});
							
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
            
    </div>

<?php get_footer(); 
endif;
?>
