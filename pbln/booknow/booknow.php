<!DOCTYPE html>
<html>
  <head>
    <title>Restaurant Reservation Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 20px;
      color: #666;
      line-height: 25px;
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
        color: black;
    }
/*On Hover Color Change*/
    #myBtn:hover {
        background-color: #7dbbf1;
    }
a {
    color: #BA0707;
    text-decoration: none;
}

a:hover {
    color: #BA0707;
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


      h1 {
      position: absolute;
      margin: 0;
      line-height: 42px;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 70px;
      }
      form {
      width: 100%;
      padding: 30px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 25px 0 #d6e0f5; 
      }
      .banner {
      position: relative;
      height: 500px;
      background-image: url("book.jpg"); 
      background-size: cover;
      background-repeat: no-repeat;
      background-position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.3); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 50px;
      }
      input {
      width: calc(100% - 10px);
      padding: 10px;
      }
      input[type="date"] {
      padding: 6px 7px;
      }
      select {
      width: 100%;
      padding: 6.5px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 10px;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #d6e0f5;
      color: #d6e0f5;
      }
      .item {
      position: relative;
      margin: 30px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      input[type="checkbox"]{
        width: 50px;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 28px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 200px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #0087cc;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #6eb8dd;
      }
      @media (max-width:768px ) and (min-width: 320px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
          }
    </style>
  </head>
  <body>

  <body>
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
   <li><a  href="..\packages\pack.php"><i class="fa fa-suitcase" aria-hidden="true"></i>  Packages</a></li>
   <li><a class="homer" href="..\booknow\booknow.php"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>  Book Now</a></li>
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

    <div class="testbox">
      <form action="book.php">
        <div class="banner">
          <h1>Book Now</h1>
        </div>
        <div class="item">
          <p>Name</p>
          <div class="name-item">

          <select name="title">
            <option value="title"  selected>Title</option>
            <option value="miss">Ms</option>
            <option value="mrs">Mrs</option>
            <option value="mr">Mr</option>
            <option value="dr">Dr</option>
          </select>
          <input class="name" type="text" name="fname" placeholder="First"  required>
          <input class="name" type="text" name="lname" placeholder="Last" required>
        </div>
            
        </div>
<div class="item">
          <p>Phone</p>
          <input type="text" name="phone" placeholder="123-456-7890"required>
        </div>
        <div class="item">
          <p>Email</p>
          <input type="email" name="email" placeholder="Enter Your Email" required>
        </div>
         <div class="item">
          <p>Confirm Email</p>
          <input type="email" name="email" placeholder=" Confirm your email" required>
<h6>YOUR VOUCHER WILL BE SENT TO THIS EMAIL ID </h6>
        </div>
        <hr>
<div class="item">
          <p>Contact Address</p>
          <input type="text" name="add1" placeholder="Street address" />
          <input type="text" name="name" placeholder="Street address line 2" />
          <div class="city-item">
            <input type="text" name="city" placeholder="City" />
            <input type="text" name="name" placeholder="Region" />
            <input type="text" name="zip" placeholder="Postal / Zip code" />
            <select  name="country">
              <option value="">Country</option>
              <option value="India">India</option>
              <option value="Germany">Germany</option>
              <option value="France">France</option>
              <option value="Armenia">Armenia</option>
              <option value="USA">USA</option>
            </select>
          </div>
        </div>
<hr>

        <div class="item">
          <p>Reservation Date</p>
          <input type="date" name="date" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
   <div class="item">
          <p>Your Estimated Time Of Arrival</p>
          <input type="time" name="btime" required/>
               </div>
        <div class="item">
          <select name="dest" required>
              <option value="" >Destination</option>
              <option value="LEMON TREE VEMBANAD LAKE RESORT, KERALA">LEMON TREE VEMBANAD LAKE RESORT, KERALA</option>
              <option value="THE HERITAGE CLUB – TRIPURA CASTLE, MEGHALAYA">THE HERITAGE CLUB – TRIPURA CASTLE, MEGHALAYA</option>
              <option value="THE OBEROI,MUMBAI, MAHARASHTRA">THE OBEROI,MUMBAI, MAHARASHTRA</option>
              <option value="THE LALIT SRINAGAR, KASHMIR">THE LALIT SRINAGAR, KASHMIR</option>
              <option value="NIRAMAYA, KERALA">NIRAMAYA, KERALA</option>
              <option value="POLO ORCHID RESORT, CHERRAPUNJEE, MEGHALAYA">POLO ORCHID RESORT, CHERRAPUNJEE, MEGHALAYA</option>
              <option value="DUNE BARR HOUSE, MATHERAN, MAHARASHTRA">DUNE BARR HOUSE, MATHERAN, MAHARASHTRA</option>
              <option value="LE HAMEAU DU KASHMIR ,KASHMIR">LE HAMEAU DU KASHMIR ,KASHMIR</option>
            </select>
        </div>
        <div class="item">
          <input type="hidden"  value="PinRequest" />
        <label class="w3-text-green">Your Package</label>
        <select name="tot_pin_requested" onchange="calculateAmount(this.value)" required>
      <option value="" disabled selected>--Select--</option>
      <option value="Standard Rooms(Ensuite)">Standard Rooms(Ensuite)</option>
      <option value="Delux-Twin Rooms">Delux-Twin Rooms</option>
      <option value="4-Bedroom Dorm">4-Bedroom Dorm</option>
      <option value="6-Bedroom Dorm">6-Bedroom Dorm</option>
    </select>
        <label>Total Amount</label>
        <input class="w3-input w3-border" name="price" id="tot_amount" type="text" readonly>
          </div>
         <div class="item">
          <p>Additional notes</p>
          <textarea rows="3"></textarea>
        </div>
<hr>
<h4>YOU WILL BE REDIRECTED TO OUR SECURE ONLINE PAYMENT SITE.</h4>
        <h5>Hotel Policy & Booking Conditions</h5>
        <p>Hotel Policy<br>
        - Guests are required to pay a 100% advance at the time of booking itself.
        - For the time being, we are allowing group stays with no maximum limit on the number of guests.<br>
        - Children below 18 years of age are not permitted entry/stay at any of our hostels, with or without guardians. We do not recommend families.<br>
        - We only accept a government ID as valid identification proof. No local IDs shall be accepted at the time of check-in.<br>
        - Guests are not permitted to bring outsiders inside the hostel campus.<br>
        - We believe in self-help and do not provide luggage assistance or room services.<br>
        - Usage of alcohol and drugs is strictly banned inside and around the property.<br>
        - Right to admission reserved. </p>

        <p>Cancellation Policy<br>
        Due to a grave financial crisis in the travel industry caused by the pandemic and the countrywide lockdown, we are imposing stricter policies on booking cancellations. We are grateful for your support during such difficult times.</p>
         
        We will be providing a full credit but no refunds on any cancellations received 1 week prior to the arrival date. You will be able to use the credit amount (equal to the booking amount) for any future booking at any of our hostels.<br>
        All booking requests will be confirmed at a 100% advance payment at the time of booking.<br>
         
        In case the property is not able to host you due to any local or subjective circumstances, we will provide you with a credit of the same amount. You will be able to avail the credited amount for any future booking at any of our hostels.<br>
         
        <h5>For any other queries, please reach out to us at reservations@zostel.com.</h5>

        <p>In response to Covid-19<br>
        - To ensure maximum safety and hygiene for our guests, we have deployed extensive cleaning and sanitation practices across the hostel, as advised by universal health agencies.<br>
        - Due to a persistent health threat, the following procedures have been made mandatory at all Zostel properties- temperature check at the time of check-in; taking a record of detailed travel history and current address; strict surveillance for social distancing in all areas. Furthermore, we recommend that you keep your profile on the Aarogya Setu app updated and handy, as suggested by the Government of India.<br>
        - Our hostel staff has been thoroughly educated and trained in sanitation procedures and standards. We are imposing all precautions against the virus spread that are under our control.<br>
        - Our kitchens will operate under regulated timings to help protect the safety of our guests and staff. As a result, certain services and amenities such as self-service buffets, common kitchens, and cutlery shall be reduced or unavailable.<br>
        - Hostel common areas shall have restricted and time-bound usage owing to periodic cleaning, social distancing, and extra caution.<br>
        - Our Health Essentials Kit is up for purchase at the hostel reception, which includes a refillable water bottle, 2 units of 100 ml sanitiser, and face masks. Face masks shall be available for purchase independently too.<br>
        - Hostel dorms shall function with limited occupancy and scattered bed allotment to maintain social distancing. Travellers shall carry their own soaps and towels to maintain hygiene.<br>
        - If you are travelling in a group, you can book a group dorm to avoid contact with outsiders. The entire group shall be allowed to stay in the same dorm in this case.<br>
        - We have pocket-friendly packages for long stays, enabling digital nomads and town newbies to have a prolonged stay without the hassle of long-term or lease commitments.</p>
<div class="item">
             <input id="check" type="checkbox" class="check" checked >
            <label for="check"><span class="icon"></span>I acknowledge and accept the Terms of In response to Covid-19 , Cancellation Policy & Hotel Policy . </label>
        </div>
         <div class="btn-block">
        
<br>
<br>
<button type="submit" href="/">Book Now</button>
        </div>
      </form>
    </div>
    <script>
            function calculateAmount(val) {
                var x = val ;
                var res;
                /*display the result*/
                if(x=="Standard Rooms(Ensuite)")
                  res = "2,000.10";
                else
                  if(x=="Delux-Twin Rooms")
                    res = "1,799.10";
                  else
                    if(x=="4-Bedroom Dorm")
                      res = "1,499.10";
                    else
                      if(x=="6-Bedroom Dorm")
                        res = "1,000.20";
                      else
                        res=0;
                var divobj = document.getElementById('tot_amount');
                divobj.value = res;
            }
        </script>
         <a href="#top" style="color: blue"><button id="myBtn"><i class="fas fa-arrow-up"></i></button></a>
  </body>
</html>