<?php
  $page_title = 'Entel';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-20">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-20">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Venta de Equipos Móviles</h1>
     
      </div>
    </div>
 </div>
</div>
 </div>
		<style type="text/css">
body {  
        background:url() repeat 0 0;                   
 }

<?php include_once('layouts/footer.php'); ?>
