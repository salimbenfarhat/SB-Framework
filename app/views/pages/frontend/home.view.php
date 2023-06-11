<header class="row">
  <div class="col-12">
    <h1 class="center">SBFRAMEWORK - TEST ENV.</h1>
    <h2 class="center">HOME PAGE</h2>
  </div>
  <?php
  // Loading Menu Block View
  require_once(ROOT_DIR.'/app/views/inc/frontend/nav.inc.php');
  ?>
</header>

<section class="row p-5">
  <div class="col-12">
  	<img width="600" src="<?= BASEPATH.'/public/assets/img/banner.png'; ?>" alt="" class="responsive-image mb-5">
  	<h1>Database Connection TEST</h1>
  	<?php 
  	switch(FrontendController::globalVars()['db']::callInstance()->getStatus()) {
  	    case 'connected' :
  			echo "<pre style='color:green;'>CONNECTION : <b>OK</b></pre>";
  	        break;
  	    case 'not connected' :
  			echo "<pre style='color:red;'>CONNECTION : <b>KO</b> => " . FrontendController::globalVars()['db']::callInstance()->getMessage() . "</pre>";
  	        break;
  	}
  	?>
  	<blockquote> 
  		<?php 
  		$status = FrontendController::globalVars()['db']::callInstance()->getStatus();
  		$status_alert = $status == "connected" ? "green" : "red";
  		?>
  		<button>Status : <b style="color:<?= $status_alert; ?>;"><?= $status; ?></b></button>
  	</blockquote>
    <hr>
  	<p>Welcome <b><?= $variables['data']['fk_name']; ?></b> !</p>
  	<hr>
  	<h3><?= $variables['data']['msg_info']; ?></h3>
  </div>
</section>	