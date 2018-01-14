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

    <!-- for slider -->

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
          <div class="item active">
              <img src="img/slide1.jpg" alt="">
              <div class="carousel-caption">
                  <h1>Carousel in a container</h1>
                  <p>This is a demo for the Bootstrap Carousel Guide.</p>
              </div>
          </div>
          <div class="item">
              <img src="img/slide2.jpg" alt="">
          </div>
          <div class="item">
              <img src="img/slide3.jpg" alt="">
          </div>
          <div class="item">
              <img src="img/slide4.jpg" alt="">
          </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
    
    <!-- /end slider -->

    <!-- for content section -->

    <div class="container">
      <div class="row content-row">
        <div class="col-md-12">
          <h3 class="text-primary">Most Popular</h3>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/dress/dress1.jpg" width="100%">
            <div class="caption">
              <h4>Myanamr Dress</h4>
              <p>price - $ 100</p>
              <p><a href="#" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> View Detail</a> <a href="#" class="btn btn-xs btn-danger" role="button"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/dress/dress2.jpg" width="100%">
            <div class="caption">
              <h4>Formarl Dress</h4>
              <p>price - $ 100</p>
              <p><a href="#" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> View Detail</a> <a href="#" class="btn btn-xs btn-danger" role="button"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/dress/dress3.jpg" width="100%">
            <div class="caption">
              <h4>Formarl Dress</h4>
              <p>price - $ 100</p>
              <p><a href="#" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> View Detail</a> <a href="#" class="btn btn-xs btn-danger" role="button"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/dress/dress4.jpg" width="100%">
            <div class="caption">
              <h4>Formarl Dress</h4>
              <p>price - $ 100</p>
              <p><a href="#" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> View Detail</a> <a href="#" class="btn btn-xs btn-danger" role="button"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
          <a href="" class="btn btn-xs btn-info pull-right">see more..</a>
        </div>
      </div>

      <!-- for new arraival -->
      <div class="row content-row">
        <div class="col-md-12">
          <h3 class="text-primary">New Arraival</h3>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/dress/dress1.jpg" width="100%">
            <div class="caption">
              <h4>Myanamr Dress</h4>
              <p>price - $ 100</p>
              <p><a href="#" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> View Detail</a> <a href="#" class="btn btn-xs btn-danger" role="button"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/dress/dress2.jpg" width="100%">
            <div class="caption">
              <h4>Formarl Dress</h4>
              <p>price - $ 100</p>
              <p><a href="#" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> View Detail</a> <a href="#" class="btn btn-xs btn-danger" role="button"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/dress/dress3.jpg" width="100%">
            <div class="caption">
              <h4>Formarl Dress</h4>
              <p>price - $ 100</p>
              <p><a href="#" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> View Detail</a> <a href="#" class="btn btn-xs btn-danger" role="button"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/dress/dress4.jpg" width="100%">
            <div class="caption">
              <h4>Formarl Dress</h4>
              <p>price - $ 100</p>
              <p><a href="#" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> View Detail</a> <a href="#" class="btn btn-xs btn-danger" role="button"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-12" style="margin-bottom: 10px;">
          <a href="" class="btn btn-xs btn-info pull-right">see more..</a>
        </div>

      </div>
      <!-- /end new arraival -->

      <!-- by category -->
      <div class="row content-row">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Myanmar Dress</a></li>
          <li><a data-toggle="tab" href="#menu1">Formal Dress</a></li>
          <li><a data-toggle="tab" href="#menu2">Europe Dress</a></li>
        </ul>

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <div class="col-md-12">
          <h3 class="text-primary">Myanmar Dress</h3>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/dress/dress1.jpg" width="100%">
            <div class="caption">
              <h4>Myanamr Dress</h4>
              <p>price - $ 100</p>
              <p><a href="#" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> View Detail</a> <a href="#" class="btn btn-xs btn-danger" role="button"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/dress/dress2.jpg" width="100%">
            <div class="caption">
              <h4>Formarl Dress</h4>
              <p>price - $ 100</p>
              <p><a href="#" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> View Detail</a> <a href="#" class="btn btn-xs btn-danger" role="button"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/dress/dress3.jpg" width="100%">
            <div class="caption">
              <h4>Formarl Dress</h4>
              <p>price - $ 100</p>
              <p><a href="#" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> View Detail</a> <a href="#" class="btn btn-xs btn-danger" role="button"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="img/dress/dress4.jpg" width="100%">
            <div class="caption">
              <h4>Formarl Dress</h4>
              <p>price - $ 100</p>
              <p><a href="#" class="btn btn-xs btn-primary" role="button"><i class="fa fa-eye"></i> View Detail</a> <a href="#" class="btn btn-xs btn-danger" role="button"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-12" style="margin-bottom: 10px;">
          <a href="" class="btn btn-xs btn-info pull-right">see more..</a>
        </div>
          </div>
          <div id="menu1" class="tab-pane fade">
            <h3>Formal Dress</h3>
            <p>Formal Dress list show here.</p>
          </div>
          <div id="menu2" class="tab-pane fade">
            <h3>Europe Dress</h3>
            <p>Show Here</p>
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