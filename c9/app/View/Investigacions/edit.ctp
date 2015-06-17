<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Investigacion'); ?>
			<fieldset>
				<legend><?php echo __('Editar Credito de Investigacion'); ?></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('porcentaje', array('class' => 'form-control', 'label' => 'Porcentaje'));
					echo $this->Form->input('comentario', array('class' => 'form-control', 'label' => 'comentario 1'));
					echo $this->Form->input('comentario2', array('class' => 'form-control', 'label' => 'comentario 2'));
					echo $this->Form->input('comentario3', array('class' => 'form-control', 'label' => 'comentario 3'));
					echo $this->Form->input('comentario4', array('class' => 'form-control', 'label' => 'comentario 4'));
					echo $this->Form->input('comentario5', array('class' => 'form-control', 'label' => 'comentario 5'));
					echo $this->Form->input('comentario6', array('class' => 'form-control', 'label' => 'comentario 6'));	
				?>
			</fieldset>
			<p>
				<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
			</p>
		</div>
	</div>
</div>