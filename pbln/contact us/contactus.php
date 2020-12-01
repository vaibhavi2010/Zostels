<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

		<title>Contact us</title>
		<link href="contact.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<script src="contact.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <style >
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
  color: blue;
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
  color: blue;
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
  color: blue;
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
        <li><a href="..\about us\about.php">About Us</a></li>
        <li><a href="..\our zostels\ourzostels.php">Our Zostels</a></li>
        <li><a href="#">Contact Us</a></li>
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
		<div class="contact-in">
      <div class="contact-map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1gOK4-dm-JBHUVx-hBxQw7WucyT9sBSkf" width="640" height="480">
        </iframe>

      </div>
      
      <div class="contact-form">
        <h1>Contact Us</h1>
        <form name="contact"  action="contact.php" onsubmit="return matchpass()" method="POST" >

          <input name="user" id="user" type="text" placeholder="Name" class="contact-form-txt" />
          <input name="mail" id="mail" type="text" placeholder="Email" class="contact-form-txt" />
          <textarea name="message" id="message" placeholder="Message" class="contact-form-textarea"></textarea>
            <input type="submit" name="submit" class="contact-form-btn" />

          <p><br>Wanderland</br></p>
          <p>Email address:info@gmail.com</p>
          <p>Address:Seawoods grand central,Navi mumbai,400706</p>
          <p>Tel no:123-456-789</p>

        </form>
      </div>

    </div>
	</body>
	<script type="text/javascript">
function validateEmail(elementValue)
 { 
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
        return emailPattern.test(elementValue); 
} 
function matchpass(){  
var uname=document.contact.user.value;
var em=document.contact.mail.value;
var m=document.contact.message.value;
 
if(m==null||m==""){
  alert("Message can't be blank");  
  return false;	
}
else
if (uname==null || uname==""){  
  alert("Name can't be blank");  
  return false;  
}
 else
    if (em==null || em==""){
      alert("Email can't be blank");
       return false;
    }
    else 
        if(validateEmail(em))
            return true;
        else{
             alert("The email doesn't match the pattern required (@ and . is a must)");
             return false;
            }

} 
</script>
<a href="#top" style="color: blue"><button id="myBtn"><i class="fas fa-arrow-up"></i></button></a>
</html>