<!-- ######### error ######### -->
<?php if(@$_SESSION['error']){ ?>
<div class="text-danger text-center"><?php print $_SESSION['error']; $_SESSION['error'] = ""; ?></div>
<?php } ?>


<!-- ######### success ######### -->
<?php if(@$_SESSION['success']){ ?>
<div class="text-success text-center">
	<?php print $_SESSION['success']; $_SESSION['success']=''; ?>
</div>
<?php } ?>