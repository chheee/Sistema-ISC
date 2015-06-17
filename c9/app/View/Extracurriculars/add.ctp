<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Extracurricular'); ?>
				<fieldset>
					<legend><?php echo __('Registrar Credito de Actividades Extracurriculares'); ?></legend>
					<?php
						echo $this->Form->input('alumno_id', array('class' => 'form-control', 'label' => 'Id'));
						echo $this->Form->input('matricula', array('class' => 'form-control', 'label' => 'Matricula'));		
						echo $this->Form->input('porcentaje', array('options' => array('25'=>'25','50'=>'50','75'=>'75','100'=>'100'), 'class' => 'form-control', 'label' => 'Porcentaje'));
						echo $this->Form->input('comentario', array('class' => 'form-control', 'label' => 'Comentario 1'));
						echo $this->Form->input('comentario2', array('class' => 'form-control', 'label' => 'Comentario 2'));
						echo $this->Form->input('comentario3', array('class' => 'form-control', 'label' => 'Comentario 3'));
						echo $this->Form->input('comentario4', array('class' => 'form-control', 'label' => 'Comentario 4'));
					?>
				</fieldset>
				<p>
					<?php echo $this->Form->end(array('label' => 'Registrar', 'class' =>'btn btn-success')); ?>
				</p>
		</div>
	</div>
</div>
