 <!-- Fixed navbar -->
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
      <ul class="nav navbar-nav">                                                      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Lista de <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->Html->link('Alumnos', array('controller' => 'alumnos', 'action' => 'index')) ?></li> 

          <?php if($current_user['role'] == 'Academico'): ?>                     
            <li><?php echo $this->Html->link('Creditos de Act. Academicas', array('controller' => 'academicas', 'action' => 'index')) ?></li>           
          <?php endif; ?>

          <?php if($current_user['role'] == 'Extracurricular'): ?>                     
            <li><?php echo $this->Html->link('Creditos de Act. Extracurriculares', array('controller' => 'extracurriculars', 'action' => 'index')) ?></li>            
          <?php endif; ?>

          <?php if($current_user['role'] == 'Formacion'): ?>                     
            <li><?php echo $this->Html->link('Creditos de Formacion', array('controller' => 'formacions', 'action' => 'index')) ?></li>           
          <?php endif; ?>

          <?php if($current_user['role'] == 'Investigacion'): ?>                   
            <li><?php echo $this->Html->link('Creditos de Investigacion', array('controller' => 'investigacions', 'action' => 'index')) ?></li>      
          <?php endif; ?>

          <?php if($current_user['role'] == 'Tutoria'): ?>                     
            <li><?php echo $this->Html->link('Creditos de Tutorias', array('controller' => 'tutorias', 'action' => 'index')) ?></li>  
          <?php endif; ?>

          <?php if($current_user['role'] == 'Admin'): ?>           
            <li><?php echo $this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'index')) ?></li>
          <?php endif; ?>
          </ul>
        </li>




        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Registrar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          
          <?php if($current_user['role'] == 'Admin'): ?>           
            <li><?php echo $this->Html->link('Alumnos', array('controller' => 'alumnos', 'action' => 'add')) ?></li>
          <?php endif; ?>

          <?php if($current_user['role'] == 'Academico'): ?>           
          <li><?php echo $this->Html->link('Creditos Act. Academicas', array('controller' => 'academicas', 'action' => 'add')) ?></li>
          <?php elseif($current_user['role'] == 'Academico'): ?>
            <li><?php echo $this->Html->link('Creditos Act. Academicas', array('controller' => 'academicas', 'action' => 'add')) ?></li>
          <?php endif; ?>

          <?php if($current_user['role'] == 'Extracurricular'): ?>                     
            <li><?php echo $this->Html->link('Creditos de Act. Extracurriculares', array('controller' => 'extracurriculars', 'action' => 'add')) ?></li>
          <?php endif; ?>

          <?php if($current_user['role'] == 'Formacion'): ?>                     
            <li><?php echo $this->Html->link('Creditos de Formacion', array('controller' => 'formacions', 'action' => 'add')) ?></li>
          <?php endif; ?>

          <?php if($current_user['role'] == 'Investigacion'): ?>                     
            <li><?php echo $this->Html->link('Creditos de Investigacion', array('controller' => 'investigacions', 'action' => 'add')) ?></li>
          <?php endif; ?>

          <?php if($current_user['role'] == 'Tutoria'): ?>                     
            <li><?php echo $this->Html->link('Creditos de Tutorias', array('controller' => 'tutorias', 'action' => 'add')) ?></li>
          <?php endif; ?>

          <?php if($current_user['role'] == 'Admin'): ?>           
            <li><?php echo $this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'add')) ?></li> 
          <?php endif; ?>
          </ul>
        </li>

        <?php if($current_user['role'] == 'Admin'): ?>  
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bitacora <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">                             
            <li><?php echo $this->Html->link('Historial', array('controller' => 'bitacoras', 'action' => 'index')) ?></li>
          <?php endif; ?>
          </ul>
        </li>




      </ul>


      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
         <li>
          <?php echo $this->Html->link( "Salir", array('controller'=>'users', 'action'=>'logout')); ?>
        </li>
      </ul>
    </div>
  </div><!--/.nav-collapse -->
</div>
</nav>


<br><br><br>