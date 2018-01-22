<?php  
  include('../functions/article-category.php');

  $articleCategory = new ArticleCateogry;

  $categories = $articleCategory->index();

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
	  					<div class="panel-title ">Articles / Article Categories</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
              <?php include('../../partials/admin/alert.php'); ?>
			  			<table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Title English</th>
                    <th>Title Myanamar</th>
                    <th style="width: 200px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
                    $x = 1;
                    foreach($categories as $category):
                  ?>
                  <tr>
                    <td><?php print $x; ?></td>
                    <td><?php print $category['title']; ?></td>
                    <td><?php print $category['title_mm']; ?></td>
                    <td>
                      <a href="edit.php?id=<?php print $category['id']; ?>" class="btn btn-xs btn-info"><i class="fa fa-eye"></i> View</a>
                      <a href="edit.php?id=<?php print $category['id']; ?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>
                      <a href="delete.php?id=<?php print $category['id']; ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                  </tr>
                  <?php 
                    $x++; 
                    endforeach;
                  ?>
                  
                </tbody>
              </table>
              <a href="create.php" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
					  </div>
		  		</div>
		  	</div>

		  	
		  </div>
		</div>
    </div>

    <?php include('../../partials/admin/footer.php'); ?>

  </body>
</html>