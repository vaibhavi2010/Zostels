<?php
$connect = mysqli_connect("localhost", "root", "", "zostels");
if(isset($_POST["user"], $_POST["pass"],$_POST["mail"]))
{
 $user = mysqli_real_escape_string($connect, $_POST["user"]);
 $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
 $mail = mysqli_real_escape_string($connect, $_POST["mail"]);
 $query = "INSERT INTO singup(user, pass,mail) VALUES('$user', '$pass','$mail')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>