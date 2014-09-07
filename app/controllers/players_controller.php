<?php
class PlayersController extends AppController {

	var $name = 'Players';

	function index() {
		$this->Player->recursive = 0;
		$this->set('players', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid player', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('player', $this->Player->read(null, $id));
	}

	function admin_index() {
		$this->Player->recursive = 0;
		$this->set('players', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid player', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('player', $this->Player->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Player->create();
			if ($this->Player->save($this->data)) {
				$this->Session->setFlash(__('The player has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid player', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Player->saveAll($this->data)) {
				$this->Session->setFlash(__('The player has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Player->find('all', array(
																	'conditions'=>array('Player.id'=>$id),
																	'contains'=>array('MugShot')
																));
			// $this->data = $this->Player->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for player', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Player->delete($id)) {
			$this->Session->setFlash(__('Player deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Player was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
