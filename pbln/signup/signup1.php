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

$user=(isset($_POST['user']) ? $_POST['user'] : null );
$pass=(isset($_POST['pass']) ? $_POST['pass'] : null );
if(isset($_POST['submit'])){
      if(!empty($email && $password)){
          $password=md5($password); 
          $select = "SELECT * FROM singup WHERE user='$user' and pass='$pass'"; 
          $result = mysqli_query($conn, $select);
          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
      
                  session_start();
                  header("location:home/home.html");
              }       
          }
          else  $loginerror="Invalid password & email";           
      }
      else  $error="Input values";            
  }             // mysqli_close($conn); 

$conn->close();
?>

