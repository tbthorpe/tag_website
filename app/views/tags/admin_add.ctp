<div class="tags form">
<?php echo $this->Form->create('Tag');?>
	<fieldset>
		<legend><?php __('Admin Add Tag'); ?></legend>
	<?php
		echo $this->Form->input('tagger_id', array('value'=>$it_id, 'type'=>'hidden'));
		echo $this->Form->input('tagged_id', array('options'=>$players));
		echo $this->Form->input('tagtime');
		echo $this->Form->input('how');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tags', true), array('action' => 'index'));?></li>
	</ul>
</div>