<?php  
  include('include/getmenu.php');

  $menu = new getmenu;

  $artcategories = $menu->getAllArticleCategory();

?>
<div class="container-fluid nav-bg">
  <div class="row header">
    <div class="container">
      <h2 class="pull-left">Dawi Fashion</h2>
      
      <?php if(@$_SESSION['user_id']){ ?>
      <ul class="pull-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle btn btn-md" data-toggle="dropdown">Profile <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
      <?php }else{ ?>
      <ul class="pull-right">
        <a href="login.php" class="btn btn-md "><li><span class="fa fa-sign-in"></span> Sign In</li></a>
        <a href="register.php" class="btn btn-md "><li><span class="fa fa-sign-out"></span> Sign Up</li></a>
      </ul>
      <?php } ?>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <!-- Static navbar -->
      <nav class="navbar" style="margin-bottom: 0px;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="border: 1px solid white;" >
              <span class="sr-only" >Toggle navigation</span>
              <span class="icon-bar" style="background: white;"></span>
              <span class="icon-bar" style="background: white;"></span>
              <span class="icon-bar" style="background: white;"></span>
            </button>
            <!-- <a class="navbar-brand" href="#" style="color: white;">Project name</a> -->
          </div>
          <div id="navbar" class="navbar-collapse collapse" style="padding-left: 0px;">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Articles <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="./article-list.php?id=all" style="color:black;">All</a></li>
                  <?php  
                    foreach($artcategories as $c):
                  ?>
                  <li><a href="./article-list.php?id=<?php print $c['id']; ?>" style="color:black;"><?php print $c['title']; ?></a></li>
                  <?php
                    endforeach;
                  ?>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="../navbar-static-top/">Help</a></li>
              <li><a href="faq.php">FAQ</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </div>
  </div>
</div>