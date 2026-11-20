<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
  ?>
<?php include_once('layouts/header.php'); ?>

<div class="login-page">
    <div class="text-center">
       <h1>Bienvenido a Entel</h1>
       <h3><strong>Iniciar sesión </strong></h3>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Usuario</label>
              <input type="name" class="form-control" name="username" placeholder="Ingrese el usuario">
        </div>
		
		
		
        <div class="form-group">
            <label for="Password" class="control-label">Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="Ingrese la contraseña">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right">Entrar</button>
        </div>
		<style type="text/css">
body {  
        background:url(images/logoEntel.png);
        background-size: 99%;
        
          
                  
 }
</style>
		
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>
