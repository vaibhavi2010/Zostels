<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INTP PROJECT</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 90%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;

}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}
/*Floating Back-To-Top Button*/
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
  background: #ffffff00;
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
        <li><a href="#">Wanderland</a></li>
        <li><a href="about us\about.php">About Us</a></li>
        <li><a href="our zostels\ourzostels.php">Our Zostels</a></li>
        <li><a href="contact us\contactus.php">Contact Us</a></li>
        <li><a href="#">SignIn/SignUp</a>
          <ul class="nav-dropdown">
            <li><a href="signup\usersign.php">User Login</a></li>
            <li><a href="Admin Login\sign.php">Admin Login</a></li>
            
          </ul>
        </li>
        
      </ul>
    </nav>
  </div>
</section>
        <!-- LANDING PAGE -->
        <div class="landing">
            <div class="landingText" data-aos="fade-up" data-aos-duration="1000">
                <h1>Travel<span style="color:#e0501b;font-size: 4vw"> & explore</span></h1>
                <h3>"when travel and you meet happiness is what it treats!!!!!"
                A journey is as interesting as what you pack in it.To make every journey as exciting as its destination, we, at Backpackers, offer you a wide range of the world's finest in bags and luggage. So, go ahead. Make Backpackers your travel companions. Pack your world with us.</h3>
                <div class="btn">
                    <a href="signup\usersign.php">Learn More</a>
                </div>
            </div>
            <div class="landingImage" data-aos="fade-down" data-aos-duration="2000">
                <img src="pic1.jpg" alt="" style="border-radius: 50px;">
            </div>
        </div>

        <!-- ABOUT SECTION -->

        <div class="about">
            <div class="aboutText" data-aos="fade-up" data-aos-duration="1000">
                <h1>Travel More <br> <span style="color:#2f8be0;font-size:3vw">Worry Less!!!</span> </h1>
                <img src="travel1.png" alt="">
            </div>
            <div class="aboutList" data-aos="fade-left" data-aos-duration="1000">
                <ol>
                    <li> 
                        <span>01</span>
                         <p>OFFBEAT LOCATIONS:-Amidst the serene valleys, find your true self..</p>
                    </li>
                    <li> 
                        <span>02</span>
                         <p>HANDPICKED PROPERTIES:-Set in a guarded vicinity.</p>
                    </li>
                    <li> 
                        <span>03</span>
                         <p>MAGNIFICENT VIEWS:-Witness the Panoramic vistas of the highlands.</p>
                    </li>
                    <li> 
                        <span>04</span>
                         <p>PERSONAL SPACE:-Find your Solace, wherever you go!</p>
                    </li>

                </ol>
            </div>
        </div>

        <!-- INFO SECTION -->

        <div class="infoSection">
            <div class="infoHeader" data-aos="fade-up" data-aos-duration="1000">
                <h1>Experience the sweetness of living in a friendly place at the most<br> <span style="color:#e0501b">serene and offbeat destinations.</span> </h1>
            </div>
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <img src="k.jpg" class="cardoneImg" alt="" data-aos="fade-up" data-aos-duration="1100">
                    <div class="cardbgone"></div>
                    <div class="cardContent">
                        <h2>Blog1</h2>
                        <p>Kerala, God’s Own Country – The Land of Beauty and Wonders !!!!</p>
                        <a href="https://traveltriangle.com/blog/kerala/">
                            <div class="cardBtn">
                                <img src="next.png" alt="" class="cardIcon">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card two" data-aos="fade-up" data-aos-duration="1300">
                    <img src="M.jpg" class="cardtwoImg" alt="" data-aos="fade-up" data-aos-duration="1200">
                    <div class="cardbgtwo"></div>
                    <div class="cardContent">
                        <h2>Blog2</h2>
                        <p>Let's go to Meghalaya! Meghalaya <br>" The scotland of India"</p>
                        <a href="https://traveltriangle.com/blog/meghalaya/">
                            <div class="cardBtn">
                                <img src="next.png" alt="" class="cardIcon">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card three" data-aos="fade-up" data-aos-duration="1600">
                    <img src="mum.jpg" class="cardthreeImg" alt="" data-aos="fade-up" data-aos-duration="1300">
                    <div class="cardbgone"></div>
                    <div class="cardContent">
                        <h2>Blog3</h2>
                        <p>Welcome to Maharashtra!! The 3rd largest state of India</p>
                        <a href="https://traveltriangle.com/blog/maharashtra/">
                            <div class="cardBtn">
                                <img src="next.png" alt="" class="cardIcon">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- BANNER AND FOOTER -->

        <div class="banner">
            <div class="bannerText" data-aos="fade-right" data-aos-duration="1000">
                <h1>How is Wanderland different from Zostel? <br> <span style="font-size:1.6vw;font-weight:normal"  class="bannerInnerText">
                    The idea behind Wanderland is to give you the experience of home away from your home, nestled in a place that is farther from cities and closer to Nature. While all our Zostel properties are about chilling with fellow travellers and sharing the space, memories, and experiences, Wanderland Homes give you a chance to spend some valuable time with your loved ones without any interruptions from the outside world.
                </span> </h1>
                <a href="#"> <img src="AndroidPNG.png" alt=""> </a>
                <a href="#"> <img src="iosPNG.png" alt=""> </a>
            </div>
            <div class="bannerImg" data-aos="fade-up" data-aos-duration="1000">
                <img src="MobileApp.png" alt="" style="border-radius: 50px;">
            </div>
        </div>

        <div class="footer">
            <h2>Zostels.</h2>
            <div class="footerlinks">
                <a href="#" class="mainlink">Home</a>
                <a href="about us\team (2).html">AboutUs</a>
                <a href="#">Our Zostels</a>
                <a href="contact us\contactus.html">Contact Us</a>
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
</body>
</html>