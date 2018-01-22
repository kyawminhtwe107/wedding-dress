<?php  
  if(!@$_SESSION)
  {
    session_start();
  }
?>
<div class="col-md-12">
  <?php  
    if($_SESSION['error']){
  ?>
  <span class="alert alert-danger"><?php print $_SESSION['error']; ?></span>
  <?php
      $_SESSION['error'] = "";
    }
  ?>
</div>
<div class="col-md-12">
  <?php  
    if($_SESSION['error']){
  ?>
  <span class="alert alert-danger"><?php print $_SESSION['error']; ?></span>
  <?php
      $_SESSION['error'] = "";
    }
  ?>
</div>