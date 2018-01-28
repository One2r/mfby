<?php

class BaseController extends Yaf_Controller_Abstract {

	public function stdReturn($content){
		header('Content-Type:application/json');
		exit(json_encode($content));
	}
	
}
