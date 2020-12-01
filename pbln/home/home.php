<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	
</head>
<body>


    <nav>
<a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>    
   <ul class="menu">
    <li><a class="homer" href="..\home\home.php"> <i class="fa fa-home"></i>Home</a>
   </li>
   <li><a  href="#"><i class="fa fa-plane" aria-hidden="true"></i>Plan Your Trip</a>
  <ul class="sub-menu">
   <li><a href="..\Plan Ur trip\Hotel 1\hotel1.php">LEMON TREE VEMBANAD LAKE RESORT, KERALA</a></li>
   <li><a href="..\Plan Ur trip\Hotel 2\hotel2.php">THE HERITAGE CLUB – TRIPURA CASTLE, MEGHALAYA</a>
    <li><a href="..\Plan Ur trip\Hotel 3\hotel3.php">THE OBEROI,MUMBAI, MAHARASHTRA</a></li>
    <li><a href="..\Plan Ur trip\Hotel 4\hotel4.php">THE LALIT SRINAGAR, KASHMIR</a></li>
    <li><a href="..\Plan Ur trip\Hotel 5\hotel5.php">NIRAMAYA, KERALA</a></li>
    <li><a href="..\Plan Ur trip\Hotel 6\hotel6.php">POLO ORCHID RESORT, CHERRAPUNJEE, MEGHALAYA</a></li>
    <li><a href="..\Plan Ur trip\Hotel 7\hotel7.php">DUNE BARR HOUSE, MATHERAN, MAHARASHTRA</a></li>
    <li><a href="..\Plan Ur trip\Hotel 8\hotel8.php">LE HAMEAU DU KASHMIR,KASHMIR</a></li>
    <li><a href="..\Plan Ur trip\packages\package.php">All</a></li>
    </ul>
   </li>
   <li><a  href="..\packages\pack.php"><i class="fa fa-suitcase" aria-hidden="true"></i>Packages</a></li>
   <li><a  href="..\booknow\booknow.php"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>Book Now</a></li>
  <li><a  href="..\index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
 
  </ul>
  </nav>
  <script >
    $(document).ready(function(){ 
  var touch   = $('#resp-menu');
  var menu  = $('.menu');
 
  $(touch).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle();
  });
  
  $(window).resize(function(){
    var w = $(window).width();
    if(w > 767 && menu.is(':hidden')) {
      menu.removeAttr('style');
    }
  });
  
});
  </script>



  	
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>

  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img class="d-block w-100" src="h3.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="h6.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="h7.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
  </div>
    </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="h8.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
  </div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="h1.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
  </div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="h2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
  </div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="h4.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
  </div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="h5.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="wrapper">
    <div class="container-fostrap">
        <div>
            <img src="logo1.png" class="fostrap-logo"  />
            <h1 class="heading">
                WELCOME TO WANDERLAND!!!!
            </h1>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card"nhref="..\Plan Ur trip\packages\package.php">
                            <img src="trip1.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="..\Plan Ur trip\packages\package.php"> PLAN YOUR TRIP</a>
                                </h4>
                                <p class="">
                                    The biggest adventure you can ever take is to live the life of your dreams!
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="..\Plan Ur trip\packages\package.php" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="..\packages\pack.php">
                            <img src="xyz.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="..\packages\pack.php">PACKAGES</a>
                                </h4>
                                <p class="">
                                    Estimate, plan and track your travel expenses within Your budgets.
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="..\packages\pack.php" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="..\booknow\booknow.php">
                            <img src="booknow.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="...\booknow\booknow.php">BOOK NOW</a>
                                </h4>
                                <p class="">
                                    The world is full of beautiful places to visit ! Hurry up Let's Explore & Book now
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="..\booknow\booknow.php" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            <div class="footer">
            <h4 style="font-weight: 600; margin-bottom: 20px;">Zostels.</h4>
            <div class="footerlinks">
                <a href="#" class="mainlink">Home</a>
                <a href="..\Plan Ur Trip\packages\package.php">Plan Your Trip</a>
                <a href="..\packages\pack.php">Packages</a>
                <a href="..\booknow\booknow.php">Book Now </a>
                <br>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
        </div>
            <a href="#top" style="color: blue"><button id="myBtn"><i class="fas fa-arrow-up"></i></button></a>
    </div>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
            AOS.init();
    </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</php>