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
  <div class="container-fluid">
   <h1 style="text-align:center;">BATH</h1>

      </div>
    </div>
    <div style="margin-top:30px;">
      <div class="container-fluid">
    <header class="image-bg-fluid-height" >
      <img class = "img-responsive img-center" src = "img/bath-crescent1.jpg"/>
    </header>
 </div>
<div class="container">

<div class="row" style="margin-top:20px; background-color:#EAEAEA">
  <div style="padding:3px;">
  <p>Bath, the historical city in the south west of England. Homed to the rich and famous, there's a reason why. It's nominated in the top 3 best cities in the UK. Other than it being known for its Bath stone crescents and masions. It's known for the unique boutique shops anywhere from house furnishings shops such as Graham and Green all the way to vintage shops such as Vintage to Vogue. Not only is there plenty of shopping to be done in Bath theres plenty of eating and partying.

Baths homed to Menu Gordon Jones and Sotto Sotto, to get a table at these exclusive restaurants can take you up to 6months waiting. If waiting 6months for a table isn't up your alley then there are plently of little gems such as yamo yamo on walcot street and the chapel arts cafe.

The night life in bath is very broad theres nightclubs such as moles famously known for having the smiths, radiohead, oasis, mumford and sons, ed sheeran, annie mac and many more perform. The nest which has upcoming djs and bands perfrom. The nest is homed to many live bands and dj sets. if indie clubs aren't your sort of thing theres still much more night life to choose from such as second bridge where the women have to dress up in heels and dresses and the men in shirts. If you feel you're past the years of clubbing there are a few more sophisticated places to go out to such as The Gin Bar, it's pretty self explanatory what they sell. There's vino vino which is a wine and tapas bar. There is also the common rooms which is a bar with a dance floor down stairs.</p>
</div>
</div>

<div style="margin-top:20px;">


  <img class = "img-responsive img-center" src = "img/bath-travel-cxc6gb-xlarge.jpg"/>

</div>

<div style="margin-top:20px;">


  <img class = "img-responsive img-center" src = "img/about-bath-roman-baths-0111.jpg"/>

</div>




   <div class="row" style="margin-top:20px;background-color:#E7E7E7;">
     <div class="col-md-4" style="text-align:center;" >
      <h4> THE NEST </br> 7  Bladud Buildings, Bath  </br>BA1 5LS </h4>
    </br>

     </div>
     <div class="col-md-8 lborder">  <!-- THIS ADDS THE GAP BEWTEEN COLUMNS -->
      <h5> Dress up in a hipster and alternative style with your ripped jeans and snap backs and you are all set for the nest. The Nest Bath have three sections. First being the top bar which is street level bar with an acoustic stage and piano, second being the lounge bar which hosts local art exhibitions, djs and live pianists, thirdly the club which have live bands on the main stage and a variety of djs during the week and weekends. On Wednesdays they hold a night called Night Bus. In the exchange of old bus and rail tickets you get free shots and bottles of alcohol. </h5>
     </div>
     </div>



<div class="row"style="margin-top:20px;">
	
  		<img class = "img-responsive img-center" src = "img/nest1.jpg"/>
 </div>
  		
<div class="row"style="margin-top:20px;">	
    <div class="col-md-6">
  		<img class = "img-responsive img-center" src = "img/nest4.jpg"/>
      </div>
      <div class="col-md-6">

  		<img class = "img-responsive img-center" src = "img/nest5.jpg"/>
      </div>
</div>
<div class="row"style="margin-top:20px;margin-bottom:20px;">

  <img class = "img-responsive img-center" src = "img/10256667_1220108784671688_7185161750450988583_o.jpg"/>

</div>

  <img class = "img-responsive img-center" src = "img/14753344_1509527935729770_2068524522356300029_o.jpg"/>




   <div class="row" style="margin-top:20px;background-color:#E7E7E7;">
     <div class="col-md-4" style="text-align:center;">
      <h4> CASA IGUANAS,</br> 38 Monmouth St, Lower Lansdown, Bath,</br> BA1 2AN  </h4>
    </br>

     </div>
     <div class="col-md-8 lborder">  <!-- THIS ADDS THE GAP BEWTEEN COLUMNS -->
      <h5> Casa iguanas is the cocktail bar for the restaurant company las iguanas. the bar is located in the city center of bath, just off kingsmead square. Customers sometimes pop downstairs to the bar after having a meal up stairs at las iguanas. The bar is Brazilian themed. The bar is popular with parties with its 2for1 on happy hour cocktails and coolers all day every day. On a Friday and Saturday night there are djs which is perfect if you want Brazilian themed cocktails and have a dance.  </h5>
      </div>
      </div>
   
<div class="row"style="margin-top:20px;">

  <img class = "img-responsive img-center" src = "img/11919141_767953886647592_3133861914710139272_o (1).jpg"/>

</div>

   <div class="row" style="margin-top:20px;background-color:#E7E7E7;">
     <div class="col-md-4" style="text-align:center;" >
      <h4>Alexandra park, Bath</h4>
    </br>

     </div>
     <div class="col-md-8 lborder">  <!-- THIS ADDS THE GAP BEWTEEN COLUMNS -->
      <h5> Alexandra park is located up in bear flat just next to beechen cliff all boys school. the park is known for its stunning views all across bath. Alexandra park is your place to visit if you want to have a picnic in the day time and take the children to the park or to watch the sunset go down and see Bath at night time glistening from the lights. </h5>
     </div>
</div>

 

  <img class = "img-responsive img-center" style="margin-top:20px" src = "img/4262206789_82cab7cd47_b.jpg"/>


<div class="row" style="margin-top:20px;margin-bottom:20px; background-color:#EAEAEA">
  
  <h4>Credits</h4>
  <p>
Anon. (2015) Casa Iguanas [online] available from <https://www.facebook.com/CasaIguanasBar/photos/a.265358330240486.54671.265096606933325/767953886647592/?type=1&theater> [22 November 2016]
Anon. (n.d.) Bath [online] available from <http://readcereal.com/city-guides/bath/> [22 November 2016]
Beacock, K. (n.d.) Things To Do In Bath [online] available from <http://www.lastminute.com/blog/things-to-do-in-bath/> [22 November 2016]
LifeInMegapixels (2009) Bath City Centre at Night [online] available from <https://www.flickr.com/photos/life_in_megapixels/4262206789> [22 November 2016]
Mawer, F. (2016) Bath City Break Guide [online] available from <http://www.telegraph.co.uk/travel/destinations/europe/united-kingdom/england/somerset/bath/articles/bath-city-break-guide/> [22 November 2016]
Tell The Hoi (2016) Tell The Hoi Photos [online] available from <https://www.facebook.com/TellTheHoi/photos/a.1509527815729782.1073741840.753648571317714/1509527945729769/?type=3&theater> [23 November 2016]</p>
</div>

</div>

<a  name="contact"></a>
  <div class="banner">

      <div class="container-fluid">

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