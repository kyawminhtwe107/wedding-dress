<?php  
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'wedding-dress';

	$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(!$link)
	{
		die(mysqli_errors($link));
	}
?>