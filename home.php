<?php
  $page_title = _('Home Page');
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1><?php echo _('This is your new home page!');?></h1>
         <p><?php echo _('Just browes around and find out what page you can access.');?></p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
