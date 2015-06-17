<div class="page-header">
	<h2><?php echo __('Extracurriculars'); ?></h2>
	
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
			<?php foreach ($extracurriculars as $extracurricular): ?>
			<tr>
				<td><?php echo h($extracurricular['Extracurricular']['id']); ?></td>				
				<td><?php echo h($extracurricular['Extracurricular']['matricula']); ?></td>
				<td><?php echo h($extracurricular['Extracurricular']['porcentaje']); ?></td>
				<td><?php echo h($extracurricular['Extracurricular']['comentario']); ?><br>
					<?php echo h($extracurricular['Extracurricular']['comentario2']); ?><br>
					<?php echo h($extracurricular['Extracurricular']['comentario3']); ?><br>
					<?php echo h($extracurricular['Extracurricular']['comentario4']); ?></td>
				<td><?php echo h($extracurricular['Extracurricular']['created']); ?></td>
				<td><?php echo h($extracurricular['Extracurricular']['modified']); ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $extracurricular['Extracurricular']['id']), array('class' => 'btn btn-sm btn-default')); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $extracurricular['Extracurricular']['id']), array('class' => 'btn btn-sm btn-default')); ?>
					<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $extracurricular['Extracurricular']['id']), array('class' => 'btn btn-sm btn-default'),array('confirm' => __('Esta seguro que desea eliminarlo # %s?', $extracurricular['Extracurricular']['id']))); ?>
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

