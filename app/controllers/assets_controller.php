<?php
class AssetsController extends AppController {

	var $name = 'Assets';

	function index() {
		$this->Asset->recursive = 0;
		$this->set('assets', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid asset', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('asset', $this->Asset->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Asset->create();
			if ($this->Asset->save($this->data)) {
				$this->Session->setFlash(__('The asset has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid asset', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Asset->save($this->data)) {
				$this->Session->setFlash(__('The asset has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Asset->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for asset', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Asset->delete($id)) {
			$this->Session->setFlash(__('Asset deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Asset was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Asset->recursive = 0;
		$this->set('assets', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid asset', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('asset', $this->Asset->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Asset->create();
			if ($this->Asset->save($this->data)) {
				$this->Session->setFlash(__('The asset has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid asset', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Asset->save($this->data)) {
				$this->Session->setFlash(__('The asset has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Asset->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for asset', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Asset->delete($id)) {
			$this->Session->setFlash(__('Asset deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Asset was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
