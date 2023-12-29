<?php
$con=mysqli_connect("localhost","root","","clientdb");
$ID=$_GET['Id'];
//$cmd="delete from logindata where Id=$ID";
mysqli_query($con,"DELETE FROM `client` WHERE id=$ID");
header("location:show.php");

?>