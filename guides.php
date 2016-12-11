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
    <div class="banner" style="margin-top:30px;">
      <div class="container">
       <h1 style="text-align:center;">GUIDES</h1>

          </div>
        </div>

        <div class="container" style="margin-top:40px">


            <div class="row">
                <div class="col-md-4">
                 <a href="Venice.php"><img src="img/gallery9.jpg" width="350" height="200"></a>
                 <h3 style="text-align:center">VENICE, ITALY</h3>
                </div>
                <div class="col-md-4">
                  <a href="Mykonos.php"><img src="img/14500302_10206330894466234_1342112881507124711_o (1).jpg" width="350" height="200"></a>
                  <h3 style="text-align:center">MYKONOS, GREECE</h3>

              </div>
                  <div class="col-md-4">
                    <a href="Bath.php"><img src="img/bath-crescent-crop-u3108.jpg" width="350" height="200"></a>
                    <h3 style="text-align:center">BATH, UK</h3>
                  </div>
                </div>
            </div>


        </div>
        <!-- /.container -->

    <!-- Page Content -->
    <div class="container">


        <div class="row">
            <div class="col-md-4">
             <a href="London.php"><img src="img/img_5214267x183.jpg" width="350" height="200"></a>
             <h3 style="text-align:center">LONDON, UK</h3>
            </div>
            <div class="col-md-4">
              <a href="Manchester.php"><img src="img/manchester 13.jpg" width="350" height="200"></a>
              <h3 style="text-align:center">MANCHESTER, UK</h3>

          </div>
              <div class="col-md-4">
                <a href="Rome.php"><img src="img/mg_6813.jpg" width="350" height="200"></a>
                <h3 style="text-align:center">ROME, ITALY</h3>
              </div>
            </div>
        </div>


    </div>
    <!-- Page Content -->
    <div class="container">


        <div class="row">
            <div class="col-md-4">
             <a href="Birmingham.php"><img src="img/screen shot 2016-11-29 at 35835 pm.jpg" width="350" height="200"></a>
             <h3 style="text-align:center">BIRMINGHAM, UK</h3>
            </div>



    </div>

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
    <!-- Footer -->

</body>

</html>