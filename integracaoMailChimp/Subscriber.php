<?php
include_once 'mailchimp-api/src/Mailchimp.php';

class Subscriber{
	
	var $mailchimp;
	
	public function __construct(){
		$this->mailchimp = new Mailchimp('7d19a51be0ad16b123691dbab8935da8-us3');
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