<!DOCTYPE html>
<html>
 <head>  
   <link rel="stylesheet" type="text/css" href="super.css"/>  
</head>
<body>
   <h2>Login Page</h2><br>    
    <div class="login">    
    <form name="myform" method="POST" action="" onsubmit="return validateform()">
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
$code=(isset($_POST['code']) ? $_POST['code'] : null );
if(isset($_POST['submit'])){
      if(!empty($mail && $pass && $code)){ 
          $select = "SELECT * FROM superadmin WHERE mail='$mail' and pass='$pass' and code='$code'"; 
          $result = mysqli_query($conn, $select);
          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                  session_start();
                  header("location:..\superadmin_signup\index.php");
              } 
          }
          else  $loginerror="Invalid password/email/code";           
      }
      else  $error="Input values";            
  }             // mysqli_close($conn); 

$conn->close();
?>


        <label>Email ID</label>    
        <input type="text" name="mail" id="mail" placeholder="Email ID" required>    
        <br><br>    
        <label>Password</label>    
        <input type="password" name="pass" id="pass" placeholder="Password" required>    
        <br><br> 
        <label>Code</label>    
        <input type="password" name="code" id="code" placeholder="The Code" required>    
        <br><br>
        <div>    
         <input type="submit" name="submit" class="button" font="bold" value="Log In">           
         <?php echo $loginerror ?>
        <?php echo $error ?>
    </div>
    </form>
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
var x= document.myform.code.value;  
  
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
    if (!checkPassword(pass)){
            alert("Password must be at least 8 characters long containing at least one UPPERCASE/lowercase and numbers");  
            return false;  
        } 
        else
            if(x==""||x==null){
                alert("Code can't be blank");
            }
            else
                if(x=="bts"){
                    return true;
                }
                else{
                    alert("Code is incorrect. Please enter the correct code to login");
                }
 } 
</script>


</body>
</html>





