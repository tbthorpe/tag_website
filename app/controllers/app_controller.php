<?php
class AppController extends Controller {

	var $components = array('Auth','Session','RequestHandler');


	function beforeFilter() { 
		Security::setHash('md5');
		
		
		
		$this->Auth->allow('*'); //auth is different		
		$this->Auth->deny('admin_index', 'admin_add', 'admin_edit', 'admin_delete');
		
		// Authenticate
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login','admin'=>false);
		$this->Auth->loginRedirect = array('controller' => 'tags', 'action' => 'index','admin'=>true);
		$this->Auth->loginError = 'No username and password was found with that combination.';
		// $this->Auth->allow('*');
		// 	$this->Auth->deny('admin_add','admin_edit','admin_delete','admin_view','admin_createimagestep2','admin_createimagestep3');
		$this->Auth->logoutRedirect = '/';

		if ($this->RequestHandler->isMobile()) {
			$this->is_mobile = true;
			$this->set('is_mobile', true );
			$this->autoRender = false;
		} else {
			$this->is_mobile = false;
			$this->set('is_mobile', false );
		}

	}

} 
?>