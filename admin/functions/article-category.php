<?php  
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	include('../../include/connect.php');
	/**
	* article categories functions
	*/
	class ArticleCateogry
	{
		
		function __construct()
		{
			# code...
		}

		public function index()
		{
			global $link;

			$sql = "SELECT * FROM article_categories";
			$query = mysqli_query($link,$sql);

			$categories = mysqli_fetch_all($query,MYSQLI_ASSOC);

			if(!$categories)
			{
				return null;
			}
			else{
				return $categories;
			}
		}

		public function create($data)
		{
			global $link;
			$state = 1;

			if($data['title'] == "" || $data['title'] == null)
			{
				$state = 0;
				$_SESSION['error'] = "Title is require!";
				header('location:../../admin/article-categories/create.php');
			}

			if($data['title_mm'] == "" || $data['title_mm'] == null)
			{
				$state = 0;
				$_SESSION['error'] = "Title Mynamar is require!";
				header('location:../../admin/article-categories/create.php');
			}

			if($state == 1){
				$created_at = date('Y-m-d H:m:s',time());
				$updated_at = date('Y-m-d H:m:s',time());

				$sql = "INSERT INTO article_categories(id,title,title_mm,slug,created_at,updated_at) VALUES('','".$data['title']."','".$data['title_mm']."','','".$created_at."','".$updated_at."')";
				$query = mysqli_query($link,$sql);

				if($query)
				{
					$_SESSION['success'] = "Successfully Created !";
					header('location: ../../admin/article-categories');
				}
				else{
					$_SESSION['error'] = "Something Wrong !";
					header('location: ../../admin/article-categories/create.php');
				}
			}
		}

		public function edit($id){
			global $link;

			if($id)
			{
				$sql = "SELECT * FROM article_categories WHERE id='$id'";
				$query = mysqli_query($link,$sql);

				$result = mysqli_fetch_assoc($query);

				if($query)
				{
					return $result;
				}
				else{
					$_SESSION['error'] = "Something Wrong !";
					header('location: ../../admin/article-categories');
					exit();
				}
			}
		}

		public function update($data,$id)
		{
			global $link;
			$state = 1;

			if($data['title'] == "" || $data['title'] == null)
			{
				$state = 0;
				$_SESSION['error'] = "Title is require!";
				header('location:../../admin/article-categories/create.php');
			}

			if($data['title_mm'] == "" || $data['title_mm'] == null)
			{
				$state = 0;
				$_SESSION['error'] = "Title Mynamar is require!";
				header('location:../../admin/article-categories/create.php');
			}

			if($state == 1){
				$updated_at = date('Y-m-d H:m:s',time());

				$sql = "UPDATE article_categories SET title='".$data['title']."',title_mm='".$data['title_mm']."',updated_at='".$updated_at."' WHERE id='$id'";
				$query = mysqli_query($link,$sql);

				if($query)
				{
					$_SESSION['success'] = "Successfully Created !";
					header('location: ../../admin/article-categories');
				}
				else{
					$_SESSION['error'] = "Something Wrong !";
					header('location: ../../admin/article-categories/edit.php?id='.$id);
				}
			}
		}

		// to delete record
		public function delete($id)
		{
			global $link;

			if($id)
			{
				$sql = "DELETE FROM article_categories WHERE id='$id'";
				$query = mysqli_query($link,$sql);

				if($query)
				{
					$_SESSION['success'] = "Successfully Delete !";
				}
				else{
					$_SESSION['error'] = "Something Wrong !";
				}

				header('location: ../../admin/article-categories');
				exit();
			}
		}
	}
?>