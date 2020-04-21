<?php
if($_GET){
include 'database.php';
$query="UPDATE `login`
SET water_limit='$_GET[limit]'
WHERE `username`='mohit'";
mysqli_query($link,$query);
echo "<script type='text/javascript'>  window.location='home.php'; </script>";
}
?>