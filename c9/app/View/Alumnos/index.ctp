<div class="page-header">
	<h2><?php echo __('Alumnos'); ?></h2>
</div>
          
          <?php if($current_user['role'] == 'Admin'): ?>                     
<div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Falta de credito</h3>
            </div>
            <div class="panel-body">
				<table class='table'>
					<th><?php echo $this->Html->link('Academico', array('controller' => 'facademicas', 'action' => 'index','class' =>"btn btn-lg btn-info")) ?><th>
					<th><?php echo $this->Html->link('Tutoria', array('controller' => 'ftutorias', 'action' => 'index','class' =>"btn btn-lg btn-info")) ?><th>
					<th><?php echo $this->Html->link('Extracurricular', array('controller' => 'fextracurriculars', 'action' => 'index','class' =>"btn btn-lg btn-info")) ?><th>
					<th><?php echo $this->Html->link('Formacion', array('controller' => 'fformacions', 'action' => 'index','class' =>"btn btn-lg btn-info")) ?><th>
					<th><?php echo $this->Html->link('Investigacion', array('controller' => 'finvestigacions', 'action' => 'index','class' =>"btn btn-lg btn-info")) ?><th>
				</table>
            </div>
</div>
<?php endif; ?>

<div class="col-md-12">
	<table class ="table table-striped">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('matricula'); ?></th>
				<th><?php echo $this->Paginator->sort('nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('apellido paterno'); ?></th>
				<th><?php echo $this->Paginator->sort('apellido materno'); ?></th>
				<th><?php echo $this->Paginator->sort('semestre'); ?></th>
				<th><?php echo $this->Paginator->sort('creado'); ?></th>
				<th><?php echo $this->Paginator->sort('modificado'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($alumnos as $alumno): ?>
			<tr>
				<td><?php echo h($alumno['Alumno']['id']); ?></td>
				<td><?php echo h($alumno['Alumno']['matricula']); ?></td>
				<td><?php echo h($alumno['Alumno']['nombre']); ?></td>
				<td><?php echo h($alumno['Alumno']['apellidopaterno']); ?></td>
				<td><?php echo h($alumno['Alumno']['apellidomaterno']); ?></td>
				<td><?php echo h($alumno['Alumno']['semestre']); ?></td>
				<td><?php echo h($alumno['Alumno']['created']); ?></td>
				<td><?php echo h($alumno['Alumno']['modified']); ?></td>
			 

				<td class="actions">
					<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $alumno['Alumno']['id']), array('class' => 'btn btn-sm btn-default')); ?>

 
					
				   <?php if($current_user['role'] == 'Admin'): ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $alumno['Alumno']['id']), array('class' => 'btn btn-sm btn-default')); ?>
					<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $alumno['Alumno']['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Are you sure you want to delete # %s?', $alumno['Alumno']['id']))); ?>
				   <?php endif; ?>
				</td>
			
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>


</div>

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