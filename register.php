<?php
  include('include/member.php');
  if(@$_POST['submit'])
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    $info =array(
      'name' => $name,
      'email' => $email,
      'pass' => $pass,
      'cpass' => $cpass,
    );
    $member = new member($dbcon);

    $member->register($info);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wedding Dress</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/user.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- for header section -->
    <?php include('partials/header.php'); ?>
    <!-- /end header section -->

    <!-- for content section -->

    <div class="container">
      
      <div class="row">
        <div class="container">
          <div class="col-md-4 col-md-offset-4 login-box">
            <h3 class="text-center">Register to Continue</h3>
              <form action="" method="POST">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="name" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" name="pass" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                  <label for="pwd2">Confirm Password:</label>
                  <input type="password" name="cpass" class="form-control" id="pwd2">
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Save">
                <p>
                  Already have an account? <a href="login.php">Login Here !</a>
                </p>
              </form>
          </div>
        </div>
      </div>

    </div>

    <!-- /end content -->

    <!-- for footer -->
    <?php include('partials/footer.php'); ?>
    <!-- /end footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>