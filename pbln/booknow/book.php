<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "zostels");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$title = $mysqli->real_escape_string($_REQUEST['title']);
$fname = $mysqli->real_escape_string($_REQUEST['fname']);
$lname = $mysqli->real_escape_string($_REQUEST['lname']);
$phone = $mysqli->real_escape_string($_REQUEST['phone']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$add1 = $mysqli->real_escape_string($_REQUEST['add1']);
$city = $mysqli->real_escape_string($_REQUEST['city']);
$zip = $mysqli->real_escape_string($_REQUEST['zip']);
$country = $mysqli->real_escape_string($_REQUEST['country']);
$date = $mysqli->real_escape_string($_REQUEST['date']);
$dest = $mysqli->real_escape_string($_REQUEST['dest']);
$package = $mysqli->real_escape_string($_REQUEST['tot_pin_requested']);
$price = $mysqli->real_escape_string($_REQUEST['price']);

// Attempt insert query execution
$sql = "INSERT INTO booknow (title,fname,lname,phone,email,add1,city,zip,country,date,dest,package,price) VALUES ('$title', '$fname', '$lname','$phone','$email','$add1','$city','$zip','$country','$date','$dest','$package','$price')";
if($mysqli->query($sql) === true){
    header("location:razor.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>