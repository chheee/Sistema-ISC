<div class="page-header">
	<h2><?php echo __('Tutorias'); ?></h2>
	
</div>
	<div class="col-md-12">


	<table class ="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			
			<th><?php echo $this->Paginator->sort('matricula'); ?></th>
			<th><?php echo $this->Paginator->sort('porcentaje'); ?></th>
			<th><?php echo $this->Paginator->sort('comentario'); ?></th>
			<th><?php echo $this->Paginator->sort('creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tutorias as $tutoria): ?>
	<tr>
		<td><?php echo h($tutoria['Tutoria']['id']); ?></td>
		<td><?php echo h($tutoria['Tutoria']['matricula']); ?></td>
		<td><?php echo h($tutoria['Tutoria']['porcentaje']); ?></td>
		<td><?php echo h($tutoria['Tutoria']['comentario']); ?><br>
			<?php echo h($tutoria['Tutoria']['comentario2']); ?><br>
			<?php echo h($tutoria['Tutoria']['comentario3']); ?><br>
			<?php echo h($tutoria['Tutoria']['comentario4']); ?>
		</td>
		<td><?php echo h($tutoria['Tutoria']['created']); ?></td>
		<td><?php echo h($tutoria['Tutoria']['modified']); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $tutoria['Tutoria']['id']),array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tutoria['Tutoria']['id']),array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $tutoria['Tutoria']['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Are you sure you want to delete # %s?', $tutoria['Tutoria']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} en total, iniciando en registro {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled btn btn-sn btn-info'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled btn btn-sn btn-info'));
	?>
	</div>
</div>