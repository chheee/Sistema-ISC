<div class="page-header">
	<h2><?php echo __('Alumnos'); ?></h2>
</div>
<div class="col-md-12">
	<table class ="table table-striped">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('operacion'); ?></th>
				<th><?php echo $this->Paginator->sort('usuario'); ?></th>
				<th><?php echo $this->Paginator->sort('host'); ?></th>
				<th><?php echo $this->Paginator->sort('modificado'); ?></th>
				<th><?php echo $this->Paginator->sort('tabla'); ?></th>			
			</tr>
		</thead>
		<tbody>
			<?php foreach ($bitacoras as $bitacora): ?>
			<tr>
				<td><?php echo h($bitacora['Bitacora']['id']); ?></td>
				<td><?php echo h($bitacora['Bitacora']['operacion']); ?></td>
				<td><?php echo h($bitacora['Bitacora']['usuario']); ?></td>
				<td><?php echo h($bitacora['Bitacora']['host']); ?></td>
				<td><?php echo h($bitacora['Bitacora']['modificado']); ?></td>
				<td><?php echo h($bitacora['Bitacora']['tabla']); ?></td>
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
		echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled btn btn-sn btn-info'));
		echo $this->Paginator->numbers(array('separator' => ' - '));
		echo $this->Paginator->next(__(' next') . ' >', array(), null, array('class' => 'next disabled btn btn-sn btn-info'));
	?>
	</div>
</div>