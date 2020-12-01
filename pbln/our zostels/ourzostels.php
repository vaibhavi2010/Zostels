<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
	<title>Our Zostels</title>
	<link rel="stylesheet" type="text/css" href="ourzostels.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
nav {
  float: right;

}
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  font-family: 'Source Sans Pro',sans-serif;
}
nav ul li {
  float: left;
  position: relative;
}
nav ul li a {
  display: block;
  padding: 0 20px;
  line-height: 70px;
  background: #ffffff;
  color: #463f3f;
  text-decoration: none;
  /*
  The full path of this code is nav ul li a:not(:only-child):after. This means that the code will apply to any a tag in our nav list that is NOT an only child, aka any dropdown. The :after means it comes after the output of the tag. I’ve decided that to specify any nav item as a dropdown, it will be followed by a unicode arrow – ▾ (#9662).
  */
}
nav ul li a:hover {
  background: #f2f2f2;
  color: #fb5958;
}
nav ul li a:not(:only-child):after {
  padding-left: 4px;
  content: ' ▾';
}
nav ul li ul li {
  min-width: 190px;
}
nav ul li ul li a {
  padding: 15px;
  line-height: 20px;
}

.nav-dropdown {
  position: absolute;
  z-index: 1;
  /* Guarantees that the dropdown will display on top of any content. */
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
  display: none;
}

.nav-mobile {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  background: #fff;
  height: 70px;
  width: 70px;
}

@media only screen and (max-width: 800px) {
  .nav-mobile {
    display: block;
  }

  nav {
    width: 100%;
    padding: 70px 0 15px;
  }
  nav ul {
    display: none;
  }
  nav ul li {
    float: none;
  }
  nav ul li a {
    padding: 15px;
    line-height: 20px;
  }
  nav ul li ul li a {
    padding-left: 30px;
  }
}
#nav-toggle {
  position: absolute;
  left: 18px;
  top: 22px;
  cursor: pointer;
  padding: 10px 35px 16px 0px;
}
#nav-toggle span,
#nav-toggle span:before,
#nav-toggle span:after {
  cursor: pointer;
  border-radius: 1px;
  height: 5px;
  width: 35px;
  background: #463f3f;
  position: absolute;
  display: block;
  content: '';
  transition: all 300ms ease-in-out;
}
#nav-toggle span:before {
  top: -10px;
}
#nav-toggle span:after {
  bottom: -10px;
}
#nav-toggle.active span {
  background-color: transparent;
}
#nav-toggle.active span:before, #nav-toggle.active span:after {
  top: 0;
}
#nav-toggle.active span:before {
  transform: rotate(45deg);
}
#nav-toggle.active span:after {
  transform: rotate(-45deg);
}

@media screen and (min-width: 800px) {
  .nav-list {
    display: block !important;
  }
}
/* 
.navigation – the outer wrapper for the navbar. Specifies the height and color, and will stretch the full width of the viewport.
*/
.navigation {
  height: 70px;
  background: #ffffff;
}

/*
.nav-container – the inner wrapper for the navbar. Defines how far the actual content should stretch.
*/
.nav-container {
  max-width: 1000px;
  margin: 0 auto;
}

.brand {
  position: absolute;
  padding-left: 20px;
  float: left;
  line-height: 70px;
  text-transform: uppercase;
  font-size: 2em;
}
.brand a,
.brand a:visited {
  color: #463f3f;
  text-decoration: none;
}

</style>
<body>
<script>
    (function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('php'
    ).click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery
</script>
    <section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#!">ZOSTELS</a>
    </div>
    <nav>
      <div class="nav-mobile">
        <a id="nav-toggle" href="#!"><span></span></a>
      </div>
      <ul class="nav-list">
        <!-- Setting the links to #! will ensure that no action takes place on click. -->
        <li><a href="..\index.php">Wanderland</a></li>
        <li><a href="..\about us\about.php">About Us</a></li>
        <li><a href="#">Our Zostels</a></li>
        <li><a href="..\contact us\contactus.php">Contact Us</a></li>
        <li><a href="#">SignIn/SignUp</a>
          <ul class="nav-dropdown">
            <li><a href="..\signup\usersign.php">User Login</a></li>
            <li><a href="..\Admin Login\sign.php">Admin Login</a></li>
            
          </ul>
        </li>
        
      </ul>
    </nav>
  </div>
</section>
        <h1 align="center">Our Zostels</h1>
	<section class="csec">
		<!--Card 1-->
		<div class="card">
			<div class="container">
				<div class="front">
					<img src="k3.jpg">
				</div>
				<div class="back">
					<a href="..\signup\usersign.php"
        >
					<img src="k3info.jpg">
				</a>
				</div>
			</div>
		</div>
		<!--Card 2-->
		<div class="card">
			<div class="container">
				<div class="front">
					<img src="m1.jpg">
				</div>
				<div class="back">
					<a href="..\signup\usersign.php"
        >
					<img src="m1info.jpg">
				</a>
				</div>
			</div>
		</div>
		<!--Card 3-->
		<div class="card">
			<div class="container">
				<div class="front">
					<img src="ma1.jpg">
				</div>
				<div class="back">
					<a href="..\signup\usersign.php"
        >
					<img src="ma1info.jpg">
				</a>
				</div>
			</div>
		</div>
		<!--Card 4-->
		<div class="card">
			<div class="container">
				<div class="front">
					<img src="j1.jpg">
				</div>
				<div class="back">
					<a href="..\signup\usersign.php"
        >
					<img src="j1info.jpg">
				</a>
				</div>
			</div>
		</div>
		<!--Card 5-->
		<div class="card">
			<div class="container">
				<div class="front">
					<img src="k2.jpg">
				</div>
				<div class="back">
			<a href="..\signup\usersign.php"
    >
					<img src="k2info.jpg">
				</a>
				</div>
			</div>
		</div>
		<!--Card 6-->
		<div class="card">
			<div class="container">
				<div class="front">
					<img src="m2.jpg">
				</div>
				<div class="back">
					<a href="..\signup\usersign.php"
        >
					<img src="m2info.jpg">
				</a>
				</div>
			</div>
		</div>
		<!--Card 7-->
		<div class="card">
			<div class="container">
				<div class="front">
					<img src="ma3.jpeg">
				</div>
				<div class="back">
				<a href="..\signup\usersign.php"
      >	
					<img src="ma3info.jpg">
				</a>
				</div>
			</div>
		</div>
		<!--Card 8-->
		<div class="card">
			<div class="container">
				<div class="front">
					<img src="j2.jpg">
				</div>
				<div class="back">
					<a href="..\signup\usersign.php"
        >
					<img src="j2info.jpg">
				</a>
				</div>
			</div>
		</div>
		</div>
            <a href="#top" style="color: blue"><button id="myBtn"><i class="fas fa-arrow-up"></i></button></a>
    </div>
	</section>
	<div class="map">
        	<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1P217xJJMu2ibfKpMzjDlmzcEYdddAGd8"></iframe>
        </div>

</body>
</php>