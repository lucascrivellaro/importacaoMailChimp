<?php
class EmailSender{
	
	
	public function send($to, $assunto,$from, $fromName, $informacoes){
		
		
// 		list ($nome, $email, $telefone) = explode("FIMCAMPO",$param);
		
		$to      = "$to";
		$subject = "$assunto";
		$message = "$assunto \nSegue as informacoes do contato realizado pelo site:\n\n$informacoes";
				
		$headers = "From: $fromName <no-reply@juiceintime.com>" . "\r\n" .
				"Reply-To: $nome <$from>" . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
		
		if(mail($to, $assunto, $message, $headers)){
			return true;
		}else {
			return false;
		}
	}
}