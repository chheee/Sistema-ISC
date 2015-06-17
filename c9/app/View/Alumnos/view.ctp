<br><br>
<div class"page-header">
	<h2><?php echo __('Alumno'); ?></h2>
</div>	

<div class="col-md-5">
	<p>
		<table class="table table-striped">
			<tr>
				<td>	<dt><?php echo __('Id'); ?></dt> </td>
				<td align=center>	<?php echo h($alumno['Alumno']['id']); ?> </td>
			</tr>			
			<tr>
				<td>	<dt><?php echo __('Matricula'); ?></dt>	</td>
				<td align=center>	<?php echo h($alumno['Alumno']['matricula']); ?> </td>
			</tr>
			<tr>
				<td>	<dt><?php echo __('Nombre'); ?></dt>	</td>
				<td align=center>	<?php echo h($alumno['Alumno']['nombre']); ?>	</td>
			</tr>	
			<tr>
				<td>	<dt><?php echo __('Apellidopaterno'); ?></dt>	</td>
				<td align=center>	<?php echo h($alumno['Alumno']['apellidopaterno']); ?>	</td>
			</tr>	
			<tr>
				<td>	<dt><?php echo __('Apellidomaterno'); ?></dt>	</td>
				<td align=center>	<?php echo h($alumno['Alumno']['apellidomaterno']); ?>	</td>
			</tr>	
			<tr>	
				<td>	<dt><?php echo __('Semestre'); ?></dt> </td>
				<td align=center>	<?php echo h($alumno['Alumno']['semestre']); ?>	</td>
			</tr>	
			<tr>	
				<td>	<dt><?php echo __('Creado'); ?></dt>	</td>
				<td align=center>	<?php echo h($alumno['Alumno']['created']); ?>	</td>
			</tr>	
			<tr>	
				<td>	<dt><?php echo __('Modificado'); ?></dt>	</td>
				<td align=center>	<?php echo h($alumno['Alumno']['modified']); ?>	</td>
			</tr>		
		</table>
	</p>




<br>
	<p>
		<div class="related">
			<h3><?php echo __('Credito de Actividades Academicas'); ?></h3>
			<?php if (!empty($alumno['Academica'])): ?>

			<table class="table table-striped">	
				<tr>
					<td><?php echo __('Porcentaje'); ?></td>
					<td><?php echo $alumno['Academica']['porcentaje']; ?></td>
				</tr>
				<tr>
					<td><?php echo __('Comentario'); ?></td>
					<td><?php echo $alumno['Academica']['comentario']; ?><br>
						<?php echo $alumno['Academica']['comentario2']; ?><br>
						<?php echo $alumno['Academica']['comentario3']; ?><br>
						<?php echo $alumno['Academica']['comentario4']; ?><br>
						<?php echo $alumno['Academica']['comentario5']; ?><br>
						<?php echo $alumno['Academica']['comentario6']; ?></td>
				</tr>
				<tr>
					<td><?php echo __('Creado'); ?></td>
					<td><?php echo $alumno['Academica']['created']; ?></td>
				</tr>
				<tr>
					<td><?php echo __('Modificado'); ?></td>
					<td><?php echo $alumno['Academica']['modified']; ?></td>
				</tr>
			</table>
		<?php endif; ?>	
	</p>
</div>


<div class="related">
	<h3><?php echo __('Credito de Actividades Extracurricularer'); ?></h3>
	<?php if (!empty($alumno['Extracurricular'])): ?>

	<table class="table table-striped">	
		<tr>
			<td><?php echo __('Porcentaje'); ?></td>
			<td><?php echo $alumno['Extracurricular']['porcentaje']; ?></td>
		</tr>
		<tr>
			<td><?php echo __('Comentario'); ?></td>
			<td><?php echo $alumno['Extracurricular']['comentario']; ?><br>
				<?php echo $alumno['Extracurricular']['comentario2']; ?><br>
				<?php echo $alumno['Extracurricular']['comentario3']; ?><br>
				<?php echo $alumno['Extracurricular']['comentario4']; ?></td>
		</tr>
		<tr>
			<td><?php echo __('Creado'); ?></td>
			<td><?php echo $alumno['Extracurricular']['created']; ?></td>
		</tr>
		<tr>
			<td><?php echo __('Modificado'); ?></td>
			<td><?php echo $alumno['Extracurricular']['modified']; ?></td>
		</tr>
	</table>
<?php endif; ?>

</div>


<div class="related">
	<h3><?php echo __('Credito de Formacion'); ?></h3>
	<?php if (!empty($alumno['Formacion'])): ?>

	<table class="table table-striped">	
		<tr>
			<td><?php echo __('Porcentaje'); ?></td>
			<td><?php echo $alumno['Formacion']['porcentaje']; ?></td>
		</tr>
		<tr>
			<td><?php echo __('Comentario'); ?></td>
			<td><?php echo $alumno['Formacion']['comentario']; ?><br>
				<?php echo $alumno['Formacion']['comentario2']; ?><br>
				<?php echo $alumno['Formacion']['comentario3']; ?><br>
				<?php echo $alumno['Formacion']['comentario4']; ?><br>
				<?php echo $alumno['Formacion']['comentario5']; ?><br>
				<?php echo $alumno['Formacion']['comentario6']; ?></td>
		</tr>
		<tr>
			<td><?php echo __('Creado'); ?></td>
			<td><?php echo $alumno['Formacion']['created']; ?></td>
		</tr>
		<tr>
			<td><?php echo __('Modificado'); ?></td>
			<td><?php echo $alumno['Formacion']['modified']; ?></td>
		</tr>
	</table>
<?php endif; ?>

</div>


<div class="related">
	<h3><?php echo __('Credito de Investigacion'); ?></h3>
	<?php if (!empty($alumno['Investigacion'])): ?>
	
	<table class="table table-striped">	
		<tr>
			<td><?php echo __('Porcentaje'); ?></td>
			<td><?php echo $alumno['Investigacion']['porcentaje']; ?></td>
		</tr>
		<tr>
			<td><?php echo __('Comentario'); ?></td>
			<td><?php echo $alumno['Investigacion']['comentario']; ?><br>
				<?php echo $alumno['Investigacion']['comentario2']; ?><br>
				<?php echo $alumno['Investigacion']['comentario3']; ?><br>
				<?php echo $alumno['Investigacion']['comentario4']; ?><br>
				<?php echo $alumno['Investigacion']['comentario5']; ?><br>
				<?php echo $alumno['Investigacion']['comentario6']; ?>
			</td>
		</tr>
		<tr>
			<td><?php echo __('Creado'); ?></td>
			<td><?php echo $alumno['Investigacion']['created']; ?></td>
		</tr>
		<tr>
			<td><?php echo __('Modificado'); ?></td>
			<td><?php echo $alumno['Investigacion']['modified']; ?></td>
		</tr>
	</table>
<?php endif; ?>
</div>


<div class="related">
	<h3><?php echo __('Credito de Tutoria'); ?></h3>
	<?php if (!empty($alumno['Tutoria'])): ?>

	<table class="table table-striped">	
		<tr>
			<td><?php echo __('Porcentaje'); ?></td>
			<td><?php echo $alumno['Tutoria']['porcentaje']; ?></td>
		</tr>
		<tr>
			<td><?php echo __('Comentario'); ?></td>
			<td><?php echo $alumno['Tutoria']['comentario']; ?><br>
				<?php echo $alumno['Tutoria']['comentario2']; ?><br>
				<?php echo $alumno['Tutoria']['comentario3']; ?><br>
				<?php echo $alumno['Tutoria']['comentario4']; ?>
			</td>
		</tr>
		<tr>
			<td><?php echo __('Creado'); ?></td>
			<td><?php echo $alumno['Tutoria']['created']; ?></td>
		</tr>
		<tr>
			<td><?php echo __('Modificado'); ?></td>
			<td><?php echo $alumno['Tutoria']['modified']; ?></td>
		</tr>
	</table>
<?php endif; ?>		