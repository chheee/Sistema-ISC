<div class="fformacions index">
	<h2><?php echo __('Faltan de credito de formacion'); ?></h2>
	<div class="col-md-12">
	<table class ="table table-striped">
		<thead>
			<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('matricula'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidopaterno'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidomaterno'); ?></th>
			<th><?php echo $this->Paginator->sort('semestre'); ?></th>
	</thead>
	<tbody>
	<?php foreach ($fformacions as $fformacion): ?>
	<tr>
		<td><?php echo h($fformacion['Fformacion']['id']); ?>&nbsp;</td>
		<td><?php echo h($fformacion['Fformacion']['matricula']); ?>&nbsp;</td>
		<td><?php echo h($fformacion['Fformacion']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($fformacion['Fformacion']['apellidopaterno']); ?>&nbsp;</td>
		<td><?php echo h($fformacion['Fformacion']['apellidomaterno']); ?>&nbsp;</td>
		<td><?php echo h($fformacion['Fformacion']['semestre']); ?>&nbsp;</td>
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