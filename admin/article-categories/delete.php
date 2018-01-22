<?php  
	include('../functions/article-category.php');

	$articleCategory = new ArticleCateogry;

	$id = $_GET['id'];

	if($id)
	{
		$articleCategory->delete($id);
	}
	else{
		header('location: ../../admin/article-categories');
	}
?>