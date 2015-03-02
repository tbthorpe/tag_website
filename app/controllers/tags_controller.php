<?php
class TagsController extends AppController {

	var $name = 'Tags';
	var $uses = array('Tag','Player');

	function index() {
		$this->Tag->recursive = 0;
		$this->set('tags', $this->paginate());
	}
	function alert(){
		$this->Tag->alertALLTheGuys();
	}

	function it(){
		$it = $this->Player->read(null,$this->Tag->getIt());
		$this->set('it',$it);
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tag', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tag', $this->Tag->read(null, $id));
	}

	function admin_index() {
		$this->Tag->recursive = 0;
		$this->set('tags', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tag', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tag', $this->Tag->read(null, $id));
	}
	function admin_test(){
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Tag->create();
			if ($this->Tag->save($this->data)) {
				$tagger = $this->Player->find('first',array('conditions'=>array('Player.id'=>$this->data['Tag']['tagger_id'])));
				$tagged = $this->Player->find('first',array('conditions'=>array('Player.id'=>$this->data['Tag']['tagged_id'])));
				$this->Tag->alertALLTheGuys($tagger['Player']['nickname'],$tagged['Player']['nickname']);
				$this->Session->setFlash(__('The tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tag could not be saved. Please, try again.', true));
			}
		} else {
			$players = $this->Player->getPlayers();
			$this->set('players',$players);
			$this->set('it_id',$this->Tag->getIt());
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tag', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tag->save($this->data)) {
				$this->Session->setFlash(__('The tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tag could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tag->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tag', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tag->delete($id)) {
			$this->Session->setFlash(__('Tag deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tag was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
