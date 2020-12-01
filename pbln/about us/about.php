<!DOCTYPE html>
<html>
<head>
  <title>Our team</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="about.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <style>
    button{
      width: 150px;
      height: 30px;
      border-radius: 25px;
      color: #01DFD7;
      background-color: #292A0A;
      outline: none;
    }
    #myBtn {
        position: fixed;
        bottom: 10px;
        right: 10px;
        font-size: 22px;
        max-width: 50px;
        height: 50px;
        width: 100%;
        text-align: center;
        border-color: rgba(85, 85, 85, 0.5);
        background-color: rgb(100,100,100);
        padding: .5px;
        border-radius: 40px;
        text-decoration: none;
        cursor: pointer;
        outline: none;
        color: black;
    }
/*On Hover Color Change*/
    #myBtn:hover {
        background-color: #7dbbf1;
    }
    #img-area{
        height: 50px;
        width: 50px;
        margin-left: 50px;
    }
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
    $('html').click(function() {
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
        <li><a href="#">About Us</a></li>
        <li><a href="..\our zostels\ourzostels.php">Our Zostels</a></li>
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
<h1>Our Team</h1>
<section id="team">
  <div class="box">
<div class="card">
  <img src="image3.jpg" alt="" >
  <div class="data">
    <h2>Shrithi Batthini</h2>
    <i>Owner of</i>
    <p>"Zostel gave us the brand & the platform to promote the locals and engage the travellers in eco-friendly tourism."</p>
    
  </div>
</div>
<div class="card">
  <img src="image1.jpeg" alt="">
  <div class="data">
    <h2>Vaibhavi H</h2>
    <i>Owner of</i>
    <p>"As promising as the trajectories are, all the efforts are totally worth it!"</p>
  
  </div>
</div>
<div class="card">
  <img src="image2.jpeg" alt="" >
  <div class="data">
    <h2>Ishika Joshi</h2>
    <i>Owner of</i>
    <p>"They Call this Zostel but we call this HOME! Every minute of an hour is counted and lived. As a zosteler, a host, we make new family each day and make them feel at home!"</p>
    
  </div>
</div>
<div class="card">
  <img src="image4.jpeg" alt="" >
  <div class="data">
    <h2>Shrinidhi Patil</h2>
    <i>owner of</i>
    <p>"It has been an incredible four year journey with Zostel of meeting new and interesting people and of having great learning experiences everyday."</p>
    
  </div>
</div>
</section>
<div style="text-align:center">
  <button onclick="playPause()"> PLAY/PAUSE </button>
  <button onclick="openFullscreen()">FullScreen</button>
  <br><br>
  <video id="video1" width="560">
    <source src="20550625-preview.mp4" type="video/mp4">
   
  </video>
</div>

<script>
var myVideo = document.getElementById("video1");

function playPause() {
  if (myVideo.paused)
    myVideo.play();
  else
    myVideo.pause();
}

/* Get the element you want displayed in fullscreen mode (a video in this example): */
var elem = document.getElementById("video1");

/* When the openFullscreen() function is executed, open the video in fullscreen.
Note that we must include prefixes for different browsers, as they don't support the requestFullscreen method yet */
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}
</script>

 
 
</video>
<a href="#top" style="color: blue"><button id="myBtn"><i class="fas fa-arrow-up"></i></button></a>
</html>

 

</body>
</html>
