<div class="players form">
<?php echo $this->Form->create('Player');?>
	<fieldset>
		<legend><?php __('Admin Add Player'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('nickname');
		echo $this->Form->input('created_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Players', true), array('action' => 'index'));?></li>
	</ul>
</div>