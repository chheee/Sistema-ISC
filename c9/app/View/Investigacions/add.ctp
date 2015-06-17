<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Investigacion'); ?>
				<fieldset>
					<legend><?php echo __('Registrar Credito de Investigacion'); ?></legend>
					<?php
						echo $this->Form->input('alumno_id', array('class' => 'form-control', 'label' => 'Id'));
						echo $this->Form->input('matricula', array('class' => 'form-control', 'label' => 'Matricula'));	
						echo $this->Form->input('porcentaje', array('class' => 'form-control', 'label' => 'Porcentaje'));
						echo $this->Form->input('comentario', array('class' => 'form-control', 'label' => 'Comentario 1'));
						echo $this->Form->input('comentario2', array('class' => 'form-control', 'label' => 'Comentario 2'));
						echo $this->Form->input('comentario3', array('class' => 'form-control', 'label' => 'Comentario 3'));
						echo $this->Form->input('comentario4', array('class' => 'form-control', 'label' => 'Comentario 4'));
						echo $this->Form->input('comentario5', array('class' => 'form-control', 'label' => 'Comentario 5'));
						echo $this->Form->input('comentario6', array('class' => 'form-control', 'label' => 'Comentario 6'));
					?>
				</fieldset>
				<p>
					<?php echo $this->Form->end(array('label' => 'Registrar', 'class' =>'btn btn-success')); ?>
				</p>
		</div>
	</div>
</div>