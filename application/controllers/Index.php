<?php
use Core\Traits\JwtAuth;

class IndexController extends BaseController {
	use JwtAuth;
	
	public function indexAction($name = "Stranger") {
		$this->stdReturn(['token'=>$this->getToken(1)]);
	}
	
}
