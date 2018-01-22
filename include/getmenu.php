<?php  
	include('connect.php');

	/**
	* get all front end menu
	*/
	class getmenu
	{
		
		function __construct()
		{
			# code...
		}

		public function getAllArticleCategory()
		{
			global $link;
			
			$sql = "SELECT * FROM article_categories";

			$query = mysqli_query($link,$sql);

			$artCategories = mysqli_fetch_all($query,MYSQLI_ASSOC);

			return $artCategories;
		}
	}

?>