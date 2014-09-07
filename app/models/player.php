<?php
class Player extends AppModel {
	var $name = 'Player';
	var $displayField = 'nickname';
	var $actsAs = array('Containable');

	public $hasOne = array(
		'MugShot'=>array(
			'className' => 'Asset',
			'foreignKey' => 'foreign_id',
			'conditions' => array('MugShot.class'=>'Players','MugShot.assettype'=>'mugshot')
			)
		);

	public function getPlayers(){
		// $this->find('list',array(
		// 		'fields'=>array('nickname')
		// 	));
		return $this->find('list');
	}

}
