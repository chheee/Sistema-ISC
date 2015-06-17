<div class="ftutorias view">
<h2><?php echo __('Ftutoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ftutoria['Ftutoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($ftutoria['Ftutoria']['matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($ftutoria['Ftutoria']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidopaterno'); ?></dt>
		<dd>
			<?php echo h($ftutoria['Ftutoria']['apellidopaterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidomaterno'); ?></dt>
		<dd>
			<?php echo h($ftutoria['Ftutoria']['apellidomaterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($ftutoria['Ftutoria']['semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ftutoria['Ftutoria']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ftutoria['Ftutoria']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ftutoria'), array('action' => 'edit', $ftutoria['Ftutoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ftutoria'), array('action' => 'delete', $ftutoria['Ftutoria']['id']), array(), __('Are you sure you want to delete # %s?', $ftutoria['Ftutoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ftutorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ftutoria'), array('action' => 'add')); ?> </li>
	</ul>
</div>
