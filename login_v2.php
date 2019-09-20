<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>

<div class="login-page">
    <div class="text-center">
       <h1><?php echo _('Welcome');?></h1>
       <p><?php echo _('Sign in to start your session');?></p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth_v2.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label"><?php echo _('Username');?></label>
              <input type="name" class="form-control" name="username" placeholder="<?php echo _('Username');?>">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label"><?php echo _('Password');?></label>
            <input type="password" name= "password" class="form-control" placeholder="<?php echo _('password');?>">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right"><?php echo _('Login');?></button>
        </div>
    </form>
</div>
<?php include_once('layouts/header.php'); ?>
