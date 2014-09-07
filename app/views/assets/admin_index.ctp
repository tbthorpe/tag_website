<div class="assets index">
	<h2><?php __('Assets');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('filename');?></th>
			<th><?php echo $this->Paginator->sort('class');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('foreign_id');?></th>
			<th><?php echo $this->Paginator->sort('headline');?></th>
			<th><?php echo $this->Paginator->sort('caption');?></th>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($assets as $asset):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $asset['Asset']['id']; ?>&nbsp;</td>
		<td><?php echo $asset['Asset']['filename']; ?>&nbsp;</td>
		<td><?php echo $asset['Asset']['class']; ?>&nbsp;</td>
		<td><?php echo $asset['Asset']['type']; ?>&nbsp;</td>
		<td><?php echo $asset['Asset']['foreign_id']; ?>&nbsp;</td>
		<td><?php echo $asset['Asset']['headline']; ?>&nbsp;</td>
		<td><?php echo $asset['Asset']['caption']; ?>&nbsp;</td>
		<td><?php echo $asset['Asset']['order']; ?>&nbsp;</td>
		<td><?php echo $asset['Asset']['created']; ?>&nbsp;</td>
		<td><?php echo $asset['Asset']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $asset['Asset']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $asset['Asset']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $asset['Asset']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $asset['Asset']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Asset', true), array('action' => 'add')); ?></li>
	</ul>
</div>