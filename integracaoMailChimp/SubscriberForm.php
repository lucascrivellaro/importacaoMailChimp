<?php
include_once 'Subscriber.php';

abstract class SubscriberForm{
	
	protected $subscriber;
	
	
	public abstract function getIdLista();
	
	public function __construct(){
		$this->subscriber = new Subscriber();
	}
	
	public function subscribe($email, $merge_vars){
		$this->subscriber->subscribe($this->getIdLista(), $email, $merge_vars);
	}
	
}