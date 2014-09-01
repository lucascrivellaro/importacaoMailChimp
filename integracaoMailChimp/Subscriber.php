<?php
include_once 'mailchimp-api/src/Mailchimp.php';

class Subscriber{
	
	var $mailchimp;
	
	public function __construct(){
		$this->mailchimp = new Mailchimp('930047be9cbb73bb436bcc33e6e0b46f-us8');
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