<div class="branchesImages index">
	<h2><?php echo __('Branches Images'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('filename'); ?></th>
			<th><?php echo $this->Paginator->sort('dir'); ?></th>
			<th><?php echo $this->Paginator->sort('descipcion'); ?></th>
			<th><?php echo $this->Paginator->sort('branch_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($branchesImages as $branchesImage): ?>
	<tr>
		<td><?php echo h($branchesImage['BranchesImage']['id']); ?>&nbsp;</td>
		<td><?php echo h($branchesImage['BranchesImage']['filename']); ?>&nbsp;</td>
		<td><?php echo h($branchesImage['BranchesImage']['dir']); ?>&nbsp;</td>
		<td><?php echo h($branchesImage['BranchesImage']['descipcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($branchesImage['Branch']['id'], array('controller' => 'branches', 'action' => 'view', $branchesImage['Branch']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $branchesImage['BranchesImage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $branchesImage['BranchesImage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $branchesImage['BranchesImage']['id']), null, __('Are you sure you want to delete # %s?', $branchesImage['BranchesImage']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Branches Image'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
