<?php
$connect = mysqli_connect("localhost", "root", "", "zostels");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM booknow WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>