<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Tutoria'); ?>
			<fieldset>
				<legend><?php echo __('Editar Credito de Tutorias'); ?></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('porcentaje', array('options' => array('25'=>'25','50'=>'50','75'=>'75','100'=>'100'), 'class' => 'form-control', 'label' => 'Porcentaje'));
					echo $this->Form->input('comentario', array('class' => 'form-control', 'label' => 'comentario 1'));
					echo $this->Form->input('comentario2', array('class' => 'form-control', 'label' => 'comentario 2'));
					echo $this->Form->input('comentario3', array('class' => 'form-control', 'label' => 'comentario 3'));
					echo $this->Form->input('comentario4', array('class' => 'form-control', 'label' => 'comentario 4'));
				?>
			</fieldset>
			<p>
				<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
			</p>
		</div>
	</div>
</div>