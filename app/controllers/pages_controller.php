<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @link http://book.cakephp.org/view/958/The-Pages-Controller
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 * @access public
 */
	var $name = 'Pages';

/**
 * Default helper
 *
 * @var array
 * @access public
 */
	var $helpers = array('Html', 'Session');

/**
 * This controller does not use a model
 *
 * @var array
 * @access public
 */
	var $uses = array('Tag','Player');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @access public
 */
	function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}

		if (method_exists($this, $page)) {
			$this->$page(); 
		} 

		$this->set(compact('page', 'subpage', 'title_for_layout'));
		//$this->render(implode('/', $path));
	}


	function home(){
		$this->set('asdf','asdf');
		$it = $this->Tag->getIt();
		// $it_player = $this->Player->find('all',array('conditions'=>(array('Player.id'=>$it))));
		$total_tags = $this->Tag->find('count');
		$this->set('total_tags',$total_tags);
		$this->set('it',$it);
		$players = $this->Player->find('all',array('order'=>array('Player.id ASC'),'contains'=>array('Tags')));
		// debug($players);
		foreach($players as $player){
			$tags = $this->Tag->getTags($player['Player']['id'],false,true);
			$tags_per_player[$player['Player']['id']] = $tags;
			$tag_heights[$player['Player']['id']] = $tags > 0 ? (100*($tags/$total_tags)).'%' : '0%';
		}
		$this->set('tags_per_player',$tags_per_player);
		$this->set('tag_heights',$tag_heights);
		$this->set('players',$players);
		if ($this->is_mobile){
			$this->set('it_player',$this->Player->find('first',array('conditions'=>array('Player.id'=>$it))));
			$this->autoRender = FALSE;
			$this->layout = 'empty';
			$this->render('/mobile/home');
		} else {
			$this->layout = 'default';
			$this->render('/pages/home');
		}
	}
	
	function tank_game(){
		$this->layout = 'html5';
		$this->render('/pages/tankgame');
	}
}
