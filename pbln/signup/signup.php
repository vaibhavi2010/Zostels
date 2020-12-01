<?php
error_reporting(0);
$user=$_POST["user"];
$pass=$_POST["pass"];
$mail=$_POST["mail"];
if(!empty($user) || !empty($pass)|| !empty($mail))
{
   $host = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'zostels';


   $conn = new mysqli($host,$dbuser,$dbpass,$dbname);
   if($conn->connect_error)
   {
     die($conn->connect_error);
   }
   else{
       //*echo "connected";//*
    $SELECT="SELECT user From singup Where user = ? Limit 1";
    $INSERT="INSERT Into singup(user,pass,mail) values(?,?,?)";

    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s",$user);
    $stmt->execute();
    $stmt->bind_result($user);
    $stmt->store_result();
    $stmt->store_result();
    $stmt->fetch();
    $rnum=$stmt->num_rows;

    if($rnum==0){
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sss", $user, $pass,$mail);
        $stmt ->execute();
        header("location: usersign.php");
    }
    else{
        echo '<script>alert("Someone already registerd using this Email")</script>'; 
         }
    $stmt->close();
    $conn->close();
          }
}

else{
    echo "All feild are required";
    return false;
}

?>