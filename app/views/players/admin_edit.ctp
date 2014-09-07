<div class="players form">
<?php echo $this->Form->create('Player',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Admin Edit Player'); ?></legend>
	<?php
		echo $this->Form->input('id', array('value'=>$this->data[0]['Player']['id']));
		echo $this->Form->input('first_name', array('value'=>$this->data[0]['Player']['first_name']));
		echo $this->Form->input('last_name', array('value'=>$this->data[0]['Player']['last_name']));
		echo $this->Form->input('nickname',array('value'=>$this->data[0]['Player']['nickname']));
	?>
	<?php if (isset($this->data[0]['MugShot']['filename'])): ?>
		<img src="<?php echo "/files/player_pics/".$this->data[0]['MugShot']['filename']; ?>" width=40 /> 
		<?php echo $this->Form->input('MugShot.id', array('type'=>'hidden', 'value'=>$this->data[0]['MugShot']['id']));?>
	<?php else: ?>
		<?php echo $this->Form->input('MugShot.id'); ?>
	<?php endif; ?>

	<?php
		echo $this->Form->input('MugShot.filename', array('label'=>'Ugly Mug','type'=>'file'));
		echo $this->Form->input('MugShot.class', array('type'=>'hidden', 'value'=>$this->name));
		echo $this->Form->input('MugShot.filesize', array('type'=>'hidden'));
		echo $this->Form->input('MugShot.mimetype', array('type'=>'hidden'));
		echo $this->Form->input('MugShot.assettype', array('type'=>'hidden', 'value'=>'mugshot'));
	 ?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Player.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Player.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Players', true), array('action' => 'index'));?></li>
	</ul>
</div>