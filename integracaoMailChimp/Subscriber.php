<?php
include_once 'mailchimp-api/src/Mailchimp.php';

class Subscriber{
	
	var $mailchimp;
	
	public function __construct(){
		$this->mailchimp = new Mailchimp('d66f8504f2831a57f2f211507bdc21fc-us3');
	}
	
	public function subscribe($lista, $email, $merge_vars){
		$this->mailchimp->call("lists/subscribe", array(
								"id"				=> $lista, 
								"email"				=> array("email" => $email),
								'merge_vars'        => $merge_vars,
								'double_optin'      => false,
								'update_existing'   => true,
								'replace_interests' => false,
								'send_welcome'      => false));
	}
}