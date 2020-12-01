<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign_In</title>
	<link rel="stylesheet" type="text/css" href="usersignup.css">
	<style>
		#hr{
        height:2px;
        margin:30px 0 30px 0;
        background:#1A5276; 
        width: 100%;   
    }
    #foot-lnk{
        margin-left: 100px;
    }
    #img-area img{
    max-width: 25%;
    max-height: 200px;
    right: 0;
    top: 0;
    margin-top: 70px;
    margin-right: 150px;
    position: absolute;
    display: block;
    }
	</style>
</head>
<body>
    <div id="img-area">
    <img src="logo1.png" alt=" " align="center">
    </div>
    <div class="nav">
            <div class="logo">
                <h4 style="color: black;">ZOSTELS</h4>
            </div>
            <div class="links">
                <a href="..\index.php">Wanderland</a>
                <a href="..\Admin Login\sign.php">Admin Login</a>
                <a href="#" class="mainlink">User Login</a>
            </div>
        </div>
    <div class="wrap">
    <div class="login">
     	<marquee>
         <h2 style="color:#1A5276; text-align: center; font-size: 25px;">LOGIN/SIGNUP FORM</h2>
        </marquee>
        
        <input id="tab-1" type="radio" name="tab" class="s1" checked>
        <label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="s2">
        <label for="tab-2" class="tab">Sign Up</label>
       
        <div class="lform">

      <div class="s1-htm" id="Sin">
      	<form name="myform" method="POST" action="" onsubmit=" return validateform()" >
          <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zostels";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$loginerror="";
$error="";

$mail=(isset($_POST['mail']) ? $_POST['mail'] : null );
$pass=(isset($_POST['pass']) ? $_POST['pass'] : null );
if(isset($_POST['submit'])){
      if(!empty($mail && $pass)){ 
          $select = "SELECT * FROM singup WHERE mail='$mail' and pass='$pass'"; 
          $result = mysqli_query($conn, $select);
          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
      
                  session_start();
                  header("location:..\home\home.php");
              }       
          }
          else  $loginerror="Invalid password & email";           
      }
      else  $error="Input values";            
  }             // mysqli_close($conn); 

$conn->close();
?>

      <div class="head">
                    <label for="mail" class="label">Email ID</label>
                    <input id="mail" name="mail" type="text" class="input" placeholder="Enter Email ID" required> 
                </div>
                <div class="head">
                    <label for="pass" class="label">Password</label>
                    <input id="pass"  name="pass" type="password" class="input" data-type="password" placeholder="Enter password" required>
                </div>
                <div class="head">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="head">
                    <input type="submit" name="submit" class="button" font="bold" value="Sign In">
                    <?php echo $loginerror ?>
                    <?php echo $error ?>
                </div>
                <div id="hr"></div>
                <div id="foot-lnk">
                    <a href="..\otp\index.php">Forgot Password?</a>
	</div>
	</form>
	</div>
    
	<div class="s2-htm" id="Sup">
		<form name="f1" action="signup.php" method="POST" onsubmit="return matchpass()">  
   		<div class="head">
                    <label for="user"  class="label">Username</label>
                    <input id="user" name="user" type="text" class="input" placeholder="Enter Username" >
                </div>
                <div class="head">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" name="pass" type="password" class="input" data-type="password" placeholder="Enter Password" >
                </div>
                <div class="head">
                    <label for="pass1" class="label">Repeat Password</label>
                    <input id="pass1" name="pass1" type="password" class="input" data-type="password" placeholder="Re-enter Password" >
                </div>
                <div class="head">
                    <label for="mail" class="label">Email Address</label>
                    <input id="mail" name="mail" type="text" class="input" placeholder="Enter Email" >
                </div>
                <div class="head">
                    <input type="submit" class="button" value="Sign Up">
                </div>
                <div id="hr"></div>
                <div id="foot-lnk">
                    <label for="tab-1">Already Member?</label>
    	</form>
		</div>
	</div>
    </div>
   	</div>
	</div>

<script> 
    function validateEmail(elementValue)
    { 
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
        return emailPattern.test(elementValue); 
} 
 function checkPassword(str)
  {
    // at least one number, one lowercase and one uppercase letter
    // at least six characters
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
    return re.test(str);
  }
function validateform(){  
var mail=document.myform.mail.value;  
var pass=document.myform.pass.value;  
  
if (mail==null || mail==""){  
  alert("Email-ID can't be blank");  
  return false;  
}
else 
if(!validateEmail(mail)){
               alert("The email doesn't match the pattern required (@ and . is a must)");
                        return false;
                    }
else
    if (checkPassword(pass)){
        return true;}
        else{
            alert("Password must be at least 8 characters long containing at least one UPPERCASE/lowercase and numbers");  
            return false;  
        } 
 }
 function matchpass(){  
var uname=document.f1.user.value;
var fpwd=document.f1.pass.value;  
var spwd=document.f1.pass1.value;
var em=document.f1.mail.value;

if (uname==null || uname==""){  
  alert("Name can't be blank");  
  return false;  
}
else
    if(fpwd==null || fpwd==""){
        alert("Password can't be blank");
        return false;
    }
    else
        if(checkPassword(fpwd)==false){
            alert("Password must be at least 8 characters long containing at least one UPPERCASE/lowercase and numbers");  
            return false;
        }   
        else
            if(fpwd!=spwd){
                alert("Passwords must be same!!");
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


</body>
</html>





