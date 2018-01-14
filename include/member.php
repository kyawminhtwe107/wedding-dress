<?php
	if(!@$_SESSION)
		{
			session_start();
		}
		include_once('include/connect.php');

		class member{

			private $dbcon;

			function __constractor($dbcon)
			{
				$this->dbcon = $dbcon;
			}
	// @@@@@@@@@@@ Login @@@@@@@@@ \\
			public function login($email,$pass)
			{
				global $dbcon;

				$_SESSION['email'] =$email;

				if($email == '' || $email == null)
				{
					$_SESSION['error'] = 'Fill Email Address !';
					header('location: login.php');
					exit();
				}


				if($pass == '' || $pass == null)
				{
					$_SESSION['error'] = 'Fill Password !';
					header('location: login.php');
					exit();
				}

				$pass = md5($pass);

				$sq = "SELECT * FROM users WHERE email = '$email' AND password = '$pass' ";
				$quer = mysqli_query($dbcon,$sq);

				$user = mysqli_fetch_assoc($quer);

				if(count($user) > 0)
				{
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['email'] = '';
					$_SESSION['user_name'] = $user['name'];

						header('location: index.php');
						exit();
				}
				else
				{
					$_SESSION['error'] = 'Email and Password Did not match !';
					header('location: login.php');
					exit();
				}
			}
	// @@@@@@@@@@@ /Login @@@@@@@@@ \\
		}
?>