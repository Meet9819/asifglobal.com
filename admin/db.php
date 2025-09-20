<?php
$con = mysqli_connect("localhost","root","Mysql@123","global");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
