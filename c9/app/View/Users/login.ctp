<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('Creditos Complementarios', array('controller' => 'pages', 'action' => 'home'), array('class' => 'navbar-brand')); ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php echo $this->Form->create('User', array('class' => 'navbar-form navbar-right')); ?>    
            <div class="form-group">
            	<?php 
            		echo $this->Form->input('username', array('label'=> false,'class' => 'form-control', 'placeholder' => 'Username'));
				?>
            </div>
            <div class="form-group">
            	<?php 
            		echo $this->Form->input('password', array('label'=> false,'class' => 'form-control', 'placeholder' => 'Password'));
            	?>
            </div>
            <?php echo $this->Form->button('Login', array('class' => 'btn btn-success')); ?>
            <?php echo $this->Form->end(); ?>            

        </div><!--/.navbar-collapse -->
      </div>
    </nav>
<br>
<br>
<br>

    <div class="jumbotron">

  <table class ="table table-striped" border="0">
    <thead>
      <tr>
        <th align="center">  <?php echo '<IMG SRC="https://itszo2014.files.wordpress.com/2014/06/logo-isc.jpg" width="178" height="180" img-position: right;>'; ?>
        </th>
        <th><h1 align="center">Bienvenido...  </h1></th>                     
        
        <th align="center">    
         <?php echo '<IMG SRC="https://pbs.twimg.com/profile_images/378800000639222966/e04a9b32acb36edc17e175d692879560.png" width="178" height="180">'; ?> 
        </th>
      </tr>               
      
    </thead>
  </table>

  <p align="center">Sistema de control de creditos complementarios para la carrera de 
      <br>
      INGENIERIA EN SISTEMAS COMPUTACIONALES
          </p>
</div>
