<?php
$servername = "localhost";
$dbuser="root";
$dbpass="";
$dbname = "zostels";

// Create connection
$conn = new mysqli($servername, $dbuser,$dbpass, $dbname);
// Check connection
$user=(isset($_POST['user']) ? $_POST['user'] : null );
$mail=(isset($_POST['mail']) ? $_POST['mail'] : null );
$message=(isset($_POST['message']) ? $_POST['message'] : null );
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (user,mail,message)
VALUES ('$user','$mail','$message')";

if ($conn->query($sql) === TRUE) {
  echo  header("location: I1.php");
} else {
  echo "Error: ";
}
if(@$_POST["submit"])
{
 echo "Thanks for giving feedback.";   
 $user = @$_POST["user"];
 $mailto = @$_POST["mail"];
 $adminmail= "honagekarvaibhavi09@gmail.com";
 $message = @$_POST["message"];
 $subject = "Feedback";
 $msg = "Hey $user thanks for filling feedback. Here is what we got from you: \n";
 $finalmsg = $msg . $message;
 $finalmsg = wordwrap($finalmsg, 70);
 $headers = "From: honagekarvaibhavi09@gmail.com";
 $headers1 = "From: $mailto";

 $msg1 = "Here is what we got from $user ($mailto): \n";
 $finalmsg1 = $msg1 . $message;
 $finalmsg1 = wordwrap($finalmsg1,70); 
 $headers1 = "From: $mailto";
 
 mail($mailto,$subject,$finalmsg,$headers);
 mail($adminmail,$subject,$finalmsg1,$headers1);

}
$conn->close();
?>