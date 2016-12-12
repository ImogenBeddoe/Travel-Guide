<?php
    require("config.php");
    if(empty($_SESSION['user']))
    {
        header("Location: index.php");
        die("Redirecting to index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Travel Guide</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Assistant:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
      <div class="container topnav">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand topnav" href="home.php">TRAVEL GUIDE</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="guides.php">GUIDES</a>
                  </li>
                  <li>
                      <a href="videos.php">VIDEOS</a>
                  </li>
                  <li>
                      <a href="social.php">SOCIAL MEDIA</a>
                  </li>
                  <li>
                      <a href="gallery.php">GALLERY</a>
                  </li>
                  <li>
                      <a href="magazine.php">MAGAZINE</a>
                  </li>
                  <li>
                      <a href="logout.php">LOGOUT</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>
</nav>
<div class="banner" style="margin-top:30px;">
  <div class="container">
   <h1 style="text-align:center;">VIDEOS</h1>

      </div>
    </div>

    <div class="container" style="margin-top:40px">


        <div class="row">
            <div class="col-md-4">
            <iframe width="350" height="200" src="https://www.youtube.com/embed/407OguH2klM" frameborder="0" allowfullscreen></iframe>
            <!-- the iframes links to the url of the videos shown on the page-->
          <h3 style="text-align:center">VENICE, ITALY</h3>
          <!-- the h3 style is for the text beneath the video to say which place the video is about-->
            </div>
            <div class="col-md-4">
                <iframe width="350" height="200" src="https://www.youtube.com/embed/Rja1qjvdR_Q" frameborder="0" allowfullscreen></iframe>
          <h3 style="text-align:center">MANCHESTER, UK</h3>

          </div>
              <div class="col-md-4">
                <iframe width="350" height="200" src="https://www.youtube.com/embed/AHZ-hfjNyK4" frameborder="0" allowfullscreen></iframe>
                <h3 style="text-align:center">LA CLUSAZ, FRANCE</h3>
              </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-md-4">
        <iframe width="350" height="200" src="https://www.youtube.com/embed/t65GoasTbTw" frameborder="0" allowfullscreen></iframe>
         <h3 style="text-align:center">BIRMINGHAM, UK</h3>
        </div>



</div>
</div>

    <a  name="contact"></a>
      <div class="banner">

          <div class="container">

              <div class="row">
                  <div class="col-lg-6">
                      <h2>CONNECT WITH US</h2>
                  </div>
                  <div class="col-lg-6">
                      <ul class="list-inline banner-social-buttons">
                          <li>
                              <a href="https://twitter.com/Travel_208_MC" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                          </li>
                          <li>
                              <a href="https://github.com/ImogenBeddoe/Travel-Guide" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                          </li>
                          <li>
                              <a href="https://www.instagram.com/travel_guide16/?hl=en" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Instagram</span></a>
                          </li>
                      </ul>
                  </div>
              </div>

          </div>
          <!-- /.container -->

      </div>
      <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <p class="copyright text-muted small">Copyright &copy; Travel Guide 2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
