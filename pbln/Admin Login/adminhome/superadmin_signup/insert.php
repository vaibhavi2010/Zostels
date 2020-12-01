<?php
$connect = mysqli_connect("localhost", "root", "", "zostels");
if(isset($_POST["user"], $_POST["pass"],$_POST["code"],$_POST["mail"]))
{
 $user = mysqli_real_escape_string($connect, $_POST["user"]);
 $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
 $code = mysqli_real_escape_string($connect, $_POST["code"]);
 $mail = mysqli_real_escape_string($connect, $_POST["mail"]);
 $query = "INSERT INTO admin(user,pass,code,mail) VALUES('$user', '$pass','$code','$mail')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>