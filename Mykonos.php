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
   <h1 style="text-align:center;">MYKONOS</h1>

      </div>
    </div>

    <div style="margin-top:30px;">
      <div class="container-fluid">
    <header class="image-bg-fluid-height" >
      <img class = "img-responsive img-center" src = "img/jmk_01.jpg"/>
    </header>
  </div>
  <div class="container">

  <div class="row" style="margin-top:20px; background-color:#E7E7E7">
  <div style="padding:3px;">
  <p>Mykonos is an island in the Cyclades group in the Aegean Sea. It’s popularly known for its summer party atmosphere. Beaches such as Paradise and Super Paradise have bars that blare thumping music. Massive dance clubs attract world-renowned DJs and typically stay open well past dawn. Iconic landmarks include a row of 16th-century windmills, which sit on a hill above Mykonos town.</p>
  </div>
  </div>
  </div>
  <div style="margin-top:20px;">
  <div class="container-fluid">
  <header class="image-bg-fluid-height" >
  <img class = "img-responsive img-center" src = "img/mykonos1.jpg"/>
  </header>
  </div>
  </div>
  <div class="container">

  <div class="row" style="margin-top:20px; background-color:#E7E7E7">
  <div style="padding:3px;">
  <p>After a recent holiday to Mykonos with my twin. We soon fell in love with Mykonos and will be returning very soon. We stayed at Nikos Rooms, couldn't have asked for a better host. What we liked most about Mykonos was the variety of things to do in the day and night. Mykonos is an Island in the Cyclades Group in the Aegean Sea. 

In the day the best spot to sunbathe is in the beach clubs such as Ornos Beach for a more high end relaxing day time. The beds rang between $25-50. If you want somewhere a bit more lively I would highly recommend Tropicanna, Paradise and Super Paradise. There's a few beach bars with entertainment such as dancers and live dj's. It's the place to be if you're young and want to have a laugh with friends. However the prices for drinks are rather expensive starting at around $20, this is the going price around the Island. </p>
  </div>
  </div>
  </div>
  
  <div class="container">
  <div class="row" style="margin-top:20px; background-color:#E7E7E7">
  <div style="padding:3px;">
  <p>CAVO PARADISO, Island, Paradise Beach, Mikonos 846 00, Greece. At Night we booked tickets for Cavo Paradiso, the ticket cost varied between $25-50, depending on when you bought them. The nightclub is on a deserted hill overlooking Paradise Beach. It is 9th best night club in the world, so if you're in Mykonos its not something to miss. The likes of DJs such as David Guetta have performed there before. </p>
  </div>
  </div>
  </div>
 
 
  <div style="margin-top:20px;">
  <div class="container-fluid">
  <header class="image-bg-fluid-height" >
  <img class = "img-responsive img-center" src = "img/img_7694.jpg"/>
  </header>
  </div>
  </div>

  <div class="container" >

   <div class="row" style="margin-top:20px; background-color:#E7E7E7">
  <div style="padding:3px;">
  <p>Food, the best bit. wounder down to the little streets in the main town there are hundreds of places to pick up food. I would highly recommend to pick up a crepe and a pork giros. If you want seafood I would recommend to head down to the Old Port. There are a lot of restaurants selling fresh seafood caught that day. One i would recommend if called Raya. The staff are super friendly and took us on a night out around Mykonos. We ended up if Little Venice in a gay club called Jackie O'. They had live entertainment such as a dj and a transvestite at the front performing. 

Not only are there a huge range of restaurants and cafes, theres also lots of small boutique shops selling jewelery, art, clothes, accessories. There's even an hermes, louis vuttion and channel.</p>
  </div>
  </div>
  </div>
  
  <div style="margin-top:20px;">
  <div class="container-fluid">
  <header class="image-bg-fluid-height" >
  <img class = "img-responsive img-center" src = "img/mykonos-5095.jpg"/>
  </header>
  </div>
  </div>
  
  <div style="margin-top:20px;margin-bottom:20px">
  <div class="container-fluid">
  <header class="image-bg-fluid-height" >
  <img class = "img-responsive img-center" src = "img/mykonos2.jpg"/>
  </header>
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