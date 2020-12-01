<!DOCTYPE html>
<html>
<head>
	<title>Hiver</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="package.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
<nav>
<a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i>  Menu</a>    
   <ul class="menu">
    <li><a href="..\..\home\home.php"> <i class="fa fa-home"></i>  Home</a>
   </li>
   <li><a   class="homer" href="#"><i class="fa fa-plane" aria-hidden="true"></i>  Plan Your Trip</a>
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
   <li><a  href="..\..\packages\pack.php"><i class="fa fa-suitcase" aria-hidden="true"></i>  Packages</a></li>
   <li><a  href="..\..\booknow\booknow.php"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>  Book Now</a></li>
  <li><a  href="..\..\index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout</a></li>
 
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


	<div class="container">
		<div class="row justify-content-center">
<div class="col-md-4">
				<div class="card shadow" style="width: 20rem;">
  <div class="inner">
						<img src="h1.jpg" class="card-img-top" alt="Card image cap">
					</div>
  <div class="card-body">
    <h5 class="card-title">LEMON TREE VEMBANAD LAKE RESORT, KERALA</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="..\Hotel 1\hotel1.php" style="margin-bottom: 10px;">Learn More...</a><br>
    <a href="..\..\packages\pack.php" style="margin-bottom: 10px;">Packages...</a><br>
    <a href="..\..\booknow\booknow.php" style="margin-bottom: 10px;">Book Now...</a>
  </div>
</div>
</div>
<div class="col-md-4">
				<div class="card shadow" style="width: 20rem;">
  <div class="inner">
						<img src="h2.jpg" class="card-img-top" alt="Card image cap">
					</div>
  <div class="card-body">
    <h5 class="card-title">THE HERITAGE CLUB – TRIPURA CASTLE, MEGHALAYA</h5>
    <p class="card-text">Tripura Castle was built by the Maharaja of Tripura and fell in love....</p>
    <a href="..\Hotel 2\hotel2.php" style="margin-bottom: 10px;">Learn More...</a><br>
    <a href="..\..\packages\pack.php" style="margin-bottom: 10px;">Packages...</a><br>
    <a href="..\..\booknow\booknow.php" style="margin-bottom: 10px;">Book Now...</a>
  </div>
</div>
</div>
<div class="col-md-4">
        <div class="card shadow" style="width: 20rem;">
          <div class="inner">
            <img src="h3.jpg" class="card-img-top" alt="Card image cap">
          </div>
  <div class="card-body">
    <h5 class="card-title">THE OBEROI,MUMBAI, MAHARASHTRA</h5>
    <p class="card-text">Originally a collection of seven islands, the modern city of Mumbai came into being during the mid eighteenth....</p>
    <a href="..\Hotel 3\hotel3.php" style="margin-bottom: 10px;">Learn More...</a><br>
    <a href="..\..\packages\pack.php" style="margin-bottom: 10px;">Packages...</a><br>
    <a href="..\..\booknow\booknow.php" style="margin-bottom: 10px;">Book Now...</a>
  </div>
</div>
  </div>
  <div class="col-md-4">
        <div class="card shadow" style="width: 20rem;">
            <div class="inner">
            <img src="h4.jpeg" class="card-img-top" alt="Card image cap">
          </div>
  <div class="card-body">
    <h5 class="card-title">THE LALIT SRINAGAR, KASHMIR</h5>
    <p class="card-text">The eastern part of the city with its sprawling lawns overlooking the Dal Lake.The historic and grand luxury....</p>
    <a href="..\Hotel 4\hotel4.php" style="margin-bottom: 10px;">Learn More...</a><br>
    <a href="..\..\packages\pack.php" style="margin-bottom: 10px;">Packages...</a><br>
    <a href="..\..\booknow\booknow.php" style="margin-bottom: 10px;">Book Now...</a>
  </div>
</div>
</div>
<div class="col-md-4">
        <div class="card shadow" style="width: 20rem;">
    <div class="inner">
            <img src="h5.jpg" class="card-img-top" alt="Card image cap">
          </div>
  <div class="card-body">
    <h5 class="card-title">NIRAMAYA, KERALA</h5>
    <p class="card-text">Wrapped in the cool embrace of tropical rainforest and tucked high in the misty mountains, Niraamaya Retreats, Thekkady is a uniquely...</p>
    <a href="..\Hotel 5\hotel5.php" style="margin-bottom: 10px;">Learn More...</a><br>
    <a href="..\..\packages\pack.php" style="margin-bottom: 10px;">Packages...</a><br>
    <a href="..\..\booknow\booknow.php" style="margin-bottom: 10px;">Book Now...</a>
  </div>
</div>
</div>
<div class="col-md-4">
        <div class="card shadow" style="width: 20rem;">
 <div class="inner">
            <img src="h6.jpg" class="card-img-top" alt="Card image cap">
          </div>
  <div class="card-body">
    <h5 class="card-title">POLO ORCHID RESORT, CHERRAPUNJEE, MEGHALAYA</h5>
    <p class="card-text">On a clifftop estate, tucked away amidst the quaint village of Nohsithiang, is....</p>
    <a href="..\Hotel 6\hotel6.php" style="margin-bottom: 10px;">Learn More...</a><br>
    <a href="..\..\packages\pack.php" style="margin-bottom: 10px;">Packages...</a><br>
    <a href="..\..\booknow\booknow.php" style="margin-bottom: 10px;">Book Now...</a>
  </div>
</div>
</div>
<div class="col-md-4">
        <div class="card shadow" style="width: 20rem;">
<div class="inner">
            <img src="h7.jpeg" class="card-img-top" alt="Card image cap">
          </div>
  <div class="card-body">
    <h5 class="card-title">DUNE BARR HOUSE, MATHERAN, MAHARASHTRA</h5>
    <p class="card-text">Located in the lush Matheran hills, Dune Barr House is a 170 year old British mansion built by....</p>
    <a href="..\Hotel 7\hotel7.php" style="margin-bottom: 10px;">Learn More...</a><br>
    <a href="..\..\packages\pack.php" style="margin-bottom: 10px;">Packages...</a><br>
    <a href="..\..\booknow\booknow.php" style="margin-bottom: 10px;">Book Now...</a>
  </div>
</div>
</div>
<div class="col-md-4">
				<div class="card shadow" style="width: 20rem;">
  <div class="inner">
						<img src="h8.jpg" class="card-img-top" alt="Card image cap">
					</div>
  <div class="card-body">
    <h5 class="card-title">LE HAMEAU DU KASHMIR ,KASHMIR</h5>
    <p class="card-text">This 4-star hotel & tourist residence is located at the entrance to Val Thorens and at the foot of....</p>
    <a href="..\Hotel 8\hotel8.php" style="margin-bottom: 10px;">Learn More...</a><br>
    <a href="..\..\packages\pack.php" style="margin-bottom: 10px;">Packages...</a><br>
    <a href="..\..\booknow\booknow.php" style="margin-bottom: 10px;">Book Now...</a>
  </div>
</div>
</div>
	</div>
	</div>
   <a href="#top" style="color: blue"><button id="myBtn"><i class="fas fa-arrow-up"></i></button></a>
</body>
</html>