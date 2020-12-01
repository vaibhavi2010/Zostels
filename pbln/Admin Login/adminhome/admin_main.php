<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="admin_main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>ZOSTELS</h3>
      </div>
      <div class="right_area">
        <a href="../sign.php" class="logout_btn"><i class="fas fa-sign-out-alt"></i></a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="1.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
       <a href="../../home/home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="admin_signup/index.php"><i class="fa fa-users" aria-hidden="true"></i><span>User login Details</span></a>
      <a href="admin_contact/index.php"><i class="fas fa-phone"></i><span>Contact Us Details</span></a>
      <a href="admin_booknow/index.php"><i class="fas fa-cart-arrow-down"></i><span>Booking Details</span></a>
      <a href="admin_ad/index.php"><i class="fa fa-user-circle" aria-hidden="true"></i><span>Admin Details</span></a>
      <a href="../sign.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="1.png" class="profile_image" alt="">
        
      </div>
      <a href="../../home/home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="admin_signup/index.php"><i class="fa fa-users" aria-hidden="true"></i><span>User login Details</span></a>
      <a href="admin_contact/index.php"><i class="fas fa-phone"></i><span>Contact Us Details</span></a>
      <a href="admin_booknow/index.php"><i class="fas fa-cart-arrow-down"></i><span>Booking Details</span></a>
      <a href="admin_admin/super.php"><i class="fa fa-user-circle" aria-hidden="true"></i><span>Admin Details</span></a>
      <a href="..\sign.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
      
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="banner">
      <div class="banner-text">
        <h1 align="center">Hey Admin User</h1>
        <br>
        <br>
        <img src="2.jpg" class="center">
    <br>
    <br>
    <h2  style="font-size: 50px;"  align="center">Welcome!</h2>
    
  </div>
    </div>
</div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
