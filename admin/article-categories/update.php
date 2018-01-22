<?php  
	include('../functions/article-category.php');
	
	if(@$_POST['submit'])
	{
	    $status = "";
	    @$title = $_POST['title'];
	    @$title_mm = $_POST['title_mm'];
	    @$id = $_POST['id'];

	    $data['title'] = $title;
	    $data['title_mm'] = $title_mm;

	    $articleCategory = new ArticleCateogry;

	    $articleCategory->update($data,$id);
	}

?>