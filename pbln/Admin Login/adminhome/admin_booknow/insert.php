<?php
$connect = mysqli_connect("localhost", "root", "", "zostels");
if(isset($_POST["title"], $_POST["fname"],$_POST["lname"],$_POST["phone"],$_POST["email"],$_POST["add1"],$_POST["city"],$_POST["zip"],$_POST["country"],$_POST["date"],$_POST["dest"],$_POST["package"],$_POST["price"]))
{
 $title = mysqli_real_escape_string($connect, $_POST["title"]);
 $fname = mysqli_real_escape_string($connect, $_POST["fname"]);
 $lname = mysqli_real_escape_string($connect, $_POST["lname"]);
 $phone = mysqli_real_escape_string($connect, $_POST["phone"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $add1 = mysqli_real_escape_string($connect, $_POST["add1"]);
 $city = mysqli_real_escape_string($connect, $_POST["city"]);
 $zip = mysqli_real_escape_string($connect, $_POST["zip"]);
 $country = mysqli_real_escape_string($connect, $_POST["country"]);
 $dates = mysqli_real_escape_string($connect, $_POST["date"]);
 $dest = mysqli_real_escape_string($connect, $_POST["dest"]);
 $package = mysqli_real_escape_string($connect, $_POST["package"]);
 $price = mysqli_real_escape_string($connect, $_POST["price"]);
 $query = "INSERT INTO booknow(title, fname,lname,phone,email,add1,city,zip,country,date,dest,package,price) VALUES('$title', '$fname','$lname','$phone','$email','$add1','$city','$zip','$country','$dates','$dest','$package','$price')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>