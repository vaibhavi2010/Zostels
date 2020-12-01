<?php
session_start();
if(isset($_POST['save']))
{
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
//For admin if he want to know who is register
$to="honagekarvaibhavi09@gmail.com";
$subject = "Thank you!";
$txt = "Some user generated OTP Name: ".$name." Email id: ".$email." Mobile number : ".$phone."";
$headers = "From: shrithibatthini2020@gmail.com" . "\r\n" .
"CC: shrithibatthini2020@gmail.com";
mail($to,$subject,$txt,$headers);
header("location:..\home\home.php");
//For admin if he want to know who is register
}
else{
echo "<p>Invalid OTP</p>";
}
}
//resend OTP
if(isset($_POST['resend']))
{
$message="<p class='w3-text-green'>Sucessfully send OTP to your mail.</p>";
$rno=$_SESSION['otp'];
$to=$_SESSION['email'];
$subject = "OTP";
$txt = "OTP: ".$rno."";
$headers = "From: otp@studentstutorial.com" . "\r\n" .
"CC: honagekarvaibhavi09@gmail.com";
mail($to,$subject,$txt,$headers);
$message="<p class='w3-text-green w3-center'><b>Sucessfully resend OTP to your mail.</b></p>";
}
?>
<!DOCTYPE html>
<html>
<header>
<title>OTP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
a{
text-decoration:none;
}
</style>
<header>
<body style="background-image:url('otp.jpg');">
<br>
<br>
<br>
<br>
<div class="w3-row">
<div class="w3-full w3-card-2 w3-round">
<div class="w3-container w3-center w3-blue">
<h2>OTP</h2>
</div>
<br>
<form class="w3-container" method="post" action="">
<br>
<p><input class="w3-input w3-border w3-round" type="password" placeholder="OTP" name="otpvalue"style="text-align:center;left: 50%;margin-right: -50%;"></p>
<p class="w3-center"><button class="w3-btn w3-blue"  name="save">Submit</button></p>
<p class="w3-center"><button class="w3-btn w3-blue"  name="resend">Resend</button></p>
</form>
<div><?php if(isset($message)) { echo $message; } ?>
</div>

</div>
<div class="w3-half">
</div>
</div>
</body>
</html>