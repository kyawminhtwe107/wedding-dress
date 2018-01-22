<?php  
  if(!@$_SESSION)
  {
    session_start();
  }
  include('../functions/article-category.php');

  if(@$_POST['submit'])
  {
    $status = "";
    @$title = $_POST['title'];
    @$title_mm = $_POST['title_mm'];

    $data['title'] = $title;
    $data['title_mm'] = $title_mm;

    $articleCategory = new ArticleCateogry;

    $articleCategory->create($data);
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Dawai Wedding Dress Admin Panel</title>
    <?php include('../../partials/admin/include.php'); ?>
  </head>
  <body>
  	<?php include('../../partials/admin/header.php'); ?>

    <div class="page-content" style="height: 500px;">
    	<div class="row">
		<div class="col-md-2">
			<?php include('../../partials/admin/nav.php'); ?> 	
		</div>
		<div class="col-md-10">
		  	

		  	<div class="row">
		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Create New Article Category</div>
						
  						<div class="panel-options">
  							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
  							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
  						</div>
		  			</div>
		  			<div class="content-box-large box-with-header col-md-12">
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
			  			<form class="form-horizontal col-md-8" role="form" method="POST" action="create.php">
                <input type="hidden" name="status" value="click">
                  <div class="form-group">
                    <label for="title_en" class="col-sm-2 control-label">Title English</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="title" id="title" placeholder="Title English..">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="title_mm" class="col-sm-2 control-label">Title Myanmar</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="title_mm" id="title_mm" placeholder="Title Myanamr">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" name="submit" value="Save" class="btn btn-primary">
                      <a href="./" class="btn btn-danger">Back</a>
                    </div>
                  </div>
                  <br/><br/>
                </form>

					  </div>
		  		</div>
		  	</div>

		  	
		  </div>
		</div>
    </div>

    <?php include('../../partials/admin/footer.php'); ?>

  </body>
</html>