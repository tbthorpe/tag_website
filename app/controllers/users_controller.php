<?php
class UsersController extends AppController {

	var $name = "Users";
	var $components = array('Auth');

	function beforeFilter(){
		parent::beforeFilter();
		//$this->Auth->allow('*');
	}
	
	function login(){
		$this->layout = 'admin';
        if($this->Auth->user()) $this->redirect(array('controller' => 'assets', 'action' => 'index', 'admin'=>true));
	}
	
	function logout(){
       $this->redirect($this->Auth->logout());
	}

}
?>