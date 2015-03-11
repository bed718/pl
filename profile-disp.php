<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Static Starter</title>

    <!-- Bootstrap -->
    <link href="/dist/css/bootstrap.css" rel="stylesheet">
    <link href="/dist/css/bootstrap-theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header id="header" class="navbar navbar-fixed-top" role="banner">
      <div class="">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-contents">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="/" class="navbar-brand"><img src="images/PL-leaf-white.svg" alt="Puff Loud Leaf" /></a>
          <a href="/" class="navbar-title"><span class="fancy">Puff</span>Loud</a>
        </div> <!-- end navbar-header -->


        <!-- Nav links and content -->
        <div class="collapse navbar-collapse" id="navbar-contents">
          <ul id="nav-main" class="nav navbar-nav" role="navigation">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">Find Nearby</a></li>
            <li><a href="#">Strains</a></li>
            <li><a href="#">Doctors</a></li>
            <li><a href="#">Cannabis 101</a></li>
            <li><a href="#">Gear</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="btn btn-default">Sign In</a></li>
            <li><a href="#" class="btn btn-primary">Sign Up</a></li>  
          </ul>
        </div> <!-- end navbar-collapse -->
      </div> <!-- end container -->
    </header>

    <section id="profile-header" class="bg-default">
      <div class="container-fluid">
        <div class="inner">
          <div class="bg-images">
            <img src="/images/profile-header-bg-test.jpg">
            <div class="gradient-overlay"></div>
          </div>
          <div class="profile-image"><img src="/images/profile-test.jpg" class="img-circle"></div>
          <div class="info clearfix">
            <h1><a href="#">Nature’s Medicines</a></h1>
            <div class="rating">
              <span class="glyphicon glyphicon-star active"></span>
              <span class="glyphicon glyphicon-star active"></span>
              <span class="glyphicon glyphicon-star active"></span>
              <span class="glyphicon glyphicon-star active"></span>
              <span class="glyphicon glyphicon-star"></span>
            </div>
            <div class="type"><a href="#">Dispensary</a></div>
          </div>
          <div class="social-actions clearfix">
            <div class="social-icons">
              <a href="" class="icon-"></a>
              <a href="" class="icon-"></a>
              <a href="" class="icon-"></a>
              <a href="" class="icon-"></a>
            </div>
            <a href="" class="btn btn-primary">+follow</a>
          </div>
        </div>
      </div>
    </section>

    <section id="profile-main">
      <div class="container-fluid">
          <div id="profile-nav" class="clearfix">
            <ul class="nav navbar-nav" role="navigation">
              <li><a href="" class="active">Overview</a></li>
              <li><a href="">Menu</a></li>
              <li><a href="">Activity</a></li>
              <li><a href="">Grows</a></li>
              <li><a href="">Follers (23)</a></li>
              <li><a href="">Following (6)</a></li>
            </ul>
          </div>

          <div id="profile-body" class="bg-light">
            <div class="row">
              <div class="col-md-4">
                <h2>The Overview</h2>
                <div class="address detail">11503 Burbank Blvd <br />
    Los Angeles, CA</div>
                <div class="phone detail">(818) 123-4567</div>
                <div class="links detail">
                  <ul class="list-unstyled">
                    <li><a href="#">www.theweedplace.com</a></li>
                    <li><a href="#">info@theweedplace.com</a></li>
                  </ul>
                </div>
                <div class="hours detail">
                  <div class="status">Open Now!</div>
                  <ul class="list-unstyled">
                    <li><span class="label">M-f: </span>10am-8pm</li>
                    <li><span class="label">Sat: </span>10am-8pm</li>
                    <li><span class="label">Sun: </span>10am-8pm</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-8">
                <div class="map"><img src="" alt=""></div>
                <div class="dir">
                  <div class="btn btn-default">directions</div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/dist/js/bootstrap.js"></script>
    <script src="/dist/js/imagesloaded.js"></script>
    <script src="/dist/js/masonry.js"></script>
    <script src="/dist/js/init.js"></script>
  </body>
</html>