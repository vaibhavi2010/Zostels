<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <style>
       .container{
  margin-top: 10%;
  margin-bottom: 0;
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
html,body{
    font-family: 'Source Sans Pro',sans-serif;
    margin-bottom: 0;
    background-attachment: fixed;
    background-repeat: no-repeat;

}
body
{
  background-image: linear-gradient(to bottom left, blue, pink);
}
h3
{
  color: var(--bs-blue);
}

a {
    color:blue;
    text-decoration: none;
}

a:hover {
    color: blue;
}


nav {
    display: block;
    background: white;
}

.menu {
    display: block;
    padding: 0px 0px;
}

.menu li {
    display: inline-block;
    position: relative;
    z-index: 100;
}

.menu li:first-child {
    margin-left: 0;
}

.menu li a {
    font-weight: 600;
    text-decoration: none;
    padding: 20px 25px;
    display: block;
    color: black;
    transition: all 0.2s ease-in-out 0s;
}

.menu li a:hover,.menu li:hover>a {
    color: #fff;
    background: #9ca3da;
}

.menu ul {
    visibility: hidden;
    opacity: 0;
    margin: 0;
    padding: 0;
    width: 170px;
    position: absolute;
    left: 0px;
    background: #fff;
    z-index: 99;
    transform: translate(0,20px);
    transition: all 0.2s ease-out;
}

.menu ul:after {
    bottom: 100%;
    left: 20%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(255, 255, 255, 0);
    border-bottom-color: #fff;
    border-width: 6px;
    margin-left: -6px;
}

.menu ul li {
    display: block;
    float: none;
    background: none;
    margin: 0;
    padding: 0;
}

.menu ul li a {
    font-size: 15px;
    font-weight: normal;
    display: block;
    color: #797979;
    background: #fff;
}

.menu ul li a:hover,.menu ul li:hover>a {
    background: #9ca3da;
    color: #fff;
}

.menu li:hover>ul {
    visibility: visible;
    opacity: 1;
    transform: translate(0,0);
}

.menu ul ul {
    left: 169px;
    top: 0px;
    visibility: hidden;
    opacity: 0;
    transform: translate(20px,20px);
    transition: all 0.2s ease-out;
}

.menu ul ul:after {
    left: -6px;
    top: 10%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(255, 255, 255, 0);
    border-right-color: #fff;
    border-width: 6px;
    margin-top: -6px;
}

.menu li>ul ul:hover {
    visibility: visible;
    opacity: 1;
    transform: translate(0,0);
}

.responsive-menu {
    display: none;
    width: 100%;
    padding: 20px 15px;
    background: #374147;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
}

.responsive-menu:hover {
    background: #374147;
    color: #fff;
    text-decoration: none;
}

a.homer {
    background: #9ca3da;
}

@media (min-width: 768px) and (max-width: 979px) {
    .mainWrap {
        width: 768px;
    }

    .menu ul {
        top: 37px;
    }

    .menu li a {
        font-size: 12px;
    }

    a.homer {
        background: #374147;
    }
}

@media (max-width: 767px) {
    .mainWrap {
        width: auto;
        padding: 50px 20px;
    }

    .menu {
        display: none;
    }

    .responsive-menu {
        display: block;
    }

    nav {
        margin: 0;
        background: none;
    }

    .menu li {
        display: block;
        margin: 0;
    }

    .menu li a {
        background: #fff;
        color: #797979;
    }

    .menu li a:hover,.menu li:hover>a {
        background: #9ca3da;
        color: #fff;
    }

    .menu ul {
        visibility: hidden;
        opacity: 0;
        top: 0;
        left: 0;
        width: 100%;
        transform: initial;
    }

    .menu li:hover>ul {
        visibility: visible;
        opacity: 1;
        position: relative;
        transform: initial;
    }

    .menu ul ul {
        left: 0;
        transform: initial;
    }

    .menu li>ul ul:hover {
        transform: initial;
    }
}


     </style>
     <nav>
<a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i>  Menu</a>    
   <ul class="menu">
    <li><a  href="..\home\home.php"> <i class="fa fa-home"></i>  Home</a>
   </li>
   <li><a  href="#"><i class="fa fa-plane" aria-hidden="true"></i>  Plan Your Trip</a>
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
   <li><a class="homer" href="..\packages\pack.php"><i class="fa fa-suitcase" aria-hidden="true"></i>  Packages</a></li>
   <li><a  href="..\booknow\booknow.php"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>  Book Now</a></li>
  <li><a  href="..\index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout</a></li>
 
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


            <h1 style="text-align: center;">Packages</h1>
       <div class="container inner-container">
        <div class="row shadow bg-white rounded-lg p-3">
            <div class="col-md-2">
                <div class="nav col nav-pills col-sm-12 mr-3 " id="v-pills-tab" role="tablist" aria-orientation="vartical">
                    <a href="#tab1" class="nav-link rounded-pill shadow mb-3 mr-3 col-sm-12 active text-center" id="Std-tab" data-toggle="pill" role="tab" aria-controls="std-tab" aria-selected="true">Standard</a>
                    <a href="#tab2" class="nav-link rounded-pill shadow mb-3 mr-3 col-sm-12  text-center" id="duo-tab" data-toggle="pill" role="tab" aria-controls="duo-tab" aria-selected="true">Delux-Duo</a>
                    <a href="#tab3" class="nav-link rounded-pill shadow mb-3 mr-3 col-sm-12  text-center" id="4r-tab" data-toggle="pill" role="tab" aria-controls="4r-tab" aria-selected="true">4-Bedroom</a>
                    <a href="#tab4" class="nav-link rounded-pill shadow mb-3 mr-3 col-sm-12  text-center" id="6r-tab" data-toggle="pill" role="tab" aria-controls="6r-tab" aria-selected="true">6-Bedroom</a>
                </div>
            </div>
            <div class="col-md-10">
               <div class="tab-content" id="v-pills-tabcontent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="std-tab">
                 <div class="row">
                     <div class="col-md-7">
                        <article>
                            <h3>Standard Rooms(Ensuite)</h3>
                            <p>Unit Capacity 2 <i class="fa fa-male" style="font-size: 25px;" aria-hidden="true"></i><br>
                               Unit Rates Inclusive of Tax<br>
                               A premium ensuite room for a private stay.<br>
                               Stay for longer duration at pocket-friendly rates.Standard rooms, are modern decorated that can accommodate up to 2 persons, totally soundproofed and equipped with high tech comforts such as high speed internet access, USB ports , smart TV and room cleaning touch system.
                               Completely renovated rooms, tastefully decorated and with integrated in-room technology.  
                            </p>
                            <h3>Rs 2,000.10<h3>
                        </article>
                        <a href="..\booknow\booknow.php" class="btn btn-info" role="button">Book Now</a>
                    </div>
                    <div class="col-md-5">
                          <img src="std.jpg" class="img-fluid rounded" alt="image 1">  
                    </div>
                 </div>
                   
                </div>

                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="duo-tab">
                 <div class="row">
                     <div class="col-md-7">
                        <article>
                            <h3>Delux-Twin Rooms</h3>
                            <p>Unit Capacity 2 <i class="fa fa-male" style="font-size: 25px;" aria-hidden="true"></i><br>
                             Unit Rates Inclusive of Tax<br>
                             Digital nomads can avail discounted rates for an extended stay with a good WiFi connection, space to isolate and work, and no long-term commitments .Completely renovated rooms tastefully decorated and with integrated in-room technology. Deluxe Twin rooms feature modern and freshly styled bathrooms with walk-in rain shower and a bottle of wine in the room upon arrival. The rooms are located in the bungalows with 2 separate beds and 1 extra sofa bed possible.
                            </p>
                            <h3>Rs 1,799.10<h3>  
                            <a href="..\booknow\booknow.php" class="btn btn-info" role="button">Book Now</a>
                        </article>
                      </div>
                    <div class="col-md-5">
                          <img src="m1.jpg" class="img-fluid rounded" alt="image 1">  
                    </div>
                 </div>  
                </div>


           <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="4r-tab">
                 <div class="row">
                     <div class="col-md-7">
                        <article>
                            <h3>4-Bedroom Dorm</h3>
                            <p>Unit Capacity 1 <i class="fa fa-male" style="font-size: 25px;" aria-hidden="true"></i><br>
                               Unit Rates Inclusive of Tax<br>
                               A smaller dorm for more privacy & less hassle.
                               A bed in this room is nice and cozy. Ideal for those who want to make new friends! You will have 1 bed in a 4-person room. Don't worry about your valuables, you can always store them in the lockers available in the room.Of course there's free Wi-Fi available throughout the hotel. You will have a high-speed internet connection that's perfectly capable of watching Netflix or post your latest pics to Instagram.
                            </p>
                            <h3>Rs 1,499.10<h3>
                        </article>
                        <a href="..\booknow\booknow.php" class="btn btn-info" role="button">Book Now</a>
                      </div>
                    <div class="col-md-5">
                          <img src="4r.jpg" class="img-fluid rounded" alt="image 1">  
                    </div>
                 </div>  
                </div>

            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="6r-tab">
                 <div class="row">
                     <div class="col-md-7">
                        <article>
                            <h3>6-Bedroom Dorm</h3>
                            <p>Unit Capacity 1 <i class="fa fa-male" style="font-size: 25px;" aria-hidden="true"></i><br>
                               Unit Rates Inclusive of Tax<br>
                               A chic dorm with cosy beds & windows that keep it well-lit.A bed in this room is great for those who want to meet new people! You will have 1 bed in a 6-person room
                               By choosing this room, you will have 6 beds in a private room all for you and your group! Ideal for families or groups of friends who would like the privacy of having their own room. Don't worry about your valuables, you can always store them in the lockers available in the room.
                            </p>
                            <h3>Rs 1,000.20<h3>
                        </article>
                        <a href="..\booknow\booknow.php" class="btn btn-info" role="button">Book Now</a>
                      </div>
                    <div class="col-md-5">
                          <img src="6r.jpg" class="img-fluid rounded" alt="image 1">  

                    </div>
                 </div>  
                </div>


               </div>
            </div>
        </div>  
       </div>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       <a href="#top" style="color: blue"><button id="myBtn"><i class="fas fa-arrow-up"></i></button></a>
    </body>
</html>