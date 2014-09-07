<div class="assets form">
<?php echo $this->Form->create('Asset');?>
	<fieldset>
		<legend><?php __('Admin Edit Asset'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('filename');
		echo $this->Form->input('class');
		echo $this->Form->input('type');
		echo $this->Form->input('foreign_id');
		echo $this->Form->input('headline');
		echo $this->Form->input('caption');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Asset.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Asset.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assets', true), array('action' => 'index'));?></li>
	</ul>
</div>