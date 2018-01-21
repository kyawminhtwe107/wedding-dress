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
						
						if($user['role'] == 'user')
						{
							header('location: index.php');
							exit();
						}
						else{
							header('location: faq.php');
						}
				}
				else
				{
					$_SESSION['error'] = 'Email and Password Did not match !';
					header('location: login.php');
					exit();
				}
			}
	// @@@@@@@@@@@ /Login @@@@@@@@@ \\


	// @@@@@@@@@@@ Register @@@@@@@@@ \\
			function register($member)
			{
				global $dbcon;

				$name = $member['name'];
				$email = $member['email'];
				$pass = $member['pass'];
				$cpass = $member['cpass'];

				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;

				if($name == "" || $name == NULL)
				{
					$_SESSION['error'] = 'Name is require !!!';
					header('location: register.php');
					exit();
				}

				if($email == "" || $email == NULL)
				{
					$_SESSION['error'] = 'Email is require !!!';
					header('location: register.php');
					exit();
				}

				if($pass == "" || $pass == NULL && $cpass == "" || $cpass == NULL)
				{
					$_SESSION['error'] = 'Password is require !!!';
					header('location: register.php');
					exit();
				}

				if($pass != $cpass)
				{
					$_SESSION['error'] = 'Password Did not match';
					header('location: register.php');
					exit();
				}
				else
				{
					$pass = md5($pass);

					$sele = "SELECT * FROM users WHERE email = '$email' ";

					$quar = mysqli_query($dbcon, $sele);

					$row =  mysqli_num_rows($quar);

					if($row > 0)
					{
						$_SESSION['error'] = 'Your Email is Already Registed !';
						header('location: register.php');
						exit();
					}
					else
					{
						$add = "INSERT INTO users (id,name,email,password) VALUES ('','$name','$email','$pass') ";

						$qu = mysqli_query($dbcon,$add);

						if(!$qu)
						{
							$_SESSION['error'] = die(mysqli_error($qu));
							header('location: register.php');
						}
						else
						{
							$_SESSION['success'] = 'Successfully Registed !';

							if($_SESSION['user_id'])
							{
								$_SESSION['user_id'] = mysqli_insert_id($qu);
							}
							header('location: index.php');
						}
					}
				}
			}
	// @@@@@@@@@@@ /Register @@@@@@@@@ \\
		}
?>