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
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
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
   <h1 style="text-align:center;">MANCHESTER</h1>

      </div>
    </div>

    <div style="margin-top:30px;">
      <div class="container-fluid">
    <header class="image-bg-fluid-height" >
      <img class = "img-responsive img-center" src = "img/manchester 13.jpg"/>
    </header>
  </div>
  </div>
  <div class="container">
  
  
   <div class="row" style="margin-top:20px;background-color:#E7E7E7;">
     <div class="col-md-4" style="text-align:center;" >
      <h4> MANCHESTER ART GALLERY </br> MOSLEY ST. MANCHESTER </br> M2 3JL </h4>
    </br>

     </div>
     <div class="col-md-8 ">  <!-- THIS ADDS THE GAP BEWTEEN COLUMNS -->
      <h5> The galleries are dynamic changing spaces with works occasionally moved for loans or conservation or to refresh displays. We try to keep our records of changes to works on display up to date, however if you’re planning to visit to see a specific work, please contact us first to check that it is on display. </h5>
     </div>
     </div>
     
     <div style="margin-top:20px;">
    
   
      <img class = "img-responsive img-center" src = "img/manchester 7.jpg"/>
    
  </div>
  
  <div class="row" style="margin-top:20px; margin-bottom:20px;">	
    <div class="col-md-6">
  		<img class = "img-responsive img-center" src = "img/manchester 8.jpg"/>
      </div>
      <div class="col-md-6">

  		<img class = "img-responsive img-center" src = "img/manchester 9.png"/>
      </div>
</div>
 
 </div>
  <div style="margin-top:20px;">
    
   
      <img class = "img-responsive img-center" src = "img/manchester 2.jpg"/>
    
  </div>
<div class="row" style="margin-top:20px;background-color:#E7E7E7;">
     <div class="col-md-4" style="text-align:center;" >
      <h4> MANCHESTER </br> STREETS </br> </h4>
    </br>

     </div>
     <div class="col-md-8 ">  <!-- THIS ADDS THE GAP BEWTEEN COLUMNS -->
      <h5> Manchester is known for its broad night life scene. Specially for underground/ techno clubs. Not only is Manchester known for its big nights out and live bands, it is also known for its graffiti, such as shown beneath in the picture of the camper van.  The china town is something you cant go to manchester and miss, it's your generic china town, but of course you can grab yourself some bargins. </h5>
     </div>
     </div>
     </div>
  <div style="margin-top:20px;">
    <div class="row" style="margin-top:20px; margin-bottom:20px;">
   
      <img class = "img-responsive img-center" src = "img/manchester 4.jpg"/>
    
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
    <!-- Footer -->
    <footer>
        <div class="container-fluid">
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