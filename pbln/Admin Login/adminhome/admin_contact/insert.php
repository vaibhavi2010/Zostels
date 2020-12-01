<?php
$connect = mysqli_connect("localhost", "root", "", "zostels");
if(isset($_POST["user"], $_POST["mail"],$_POST["message"]))
{
 $user = mysqli_real_escape_string($connect, $_POST["user"]);
 $mail = mysqli_real_escape_string($connect, $_POST["mail"]);
 $message = mysqli_real_escape_string($connect, $_POST["message"]);
 $query = "INSERT INTO contact(user, mail,message) VALUES('$user', '$mail','$message')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>