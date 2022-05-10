<?php
$con = mysqli_connect("localhost","root","","skanda_sales");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>