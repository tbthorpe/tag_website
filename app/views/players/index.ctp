<div class="players index">
	<h2><?php __('Players');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('nickname');?></th>
			<th><?php echo $this->Paginator->sort('created_at');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($players as $player):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $player['Player']['id']; ?>&nbsp;</td>
		<td><?php echo $player['Player']['first_name']; ?>&nbsp;</td>
		<td><?php echo $player['Player']['last_name']; ?>&nbsp;</td>
		<td><?php echo $player['Player']['nickname']; ?>&nbsp;</td>
		<td><?php echo $player['Player']['created_at']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $player['Player']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $player['Player']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $player['Player']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $player['Player']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Player', true), array('action' => 'add')); ?></li>
	</ul>
</div>