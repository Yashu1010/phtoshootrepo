<?php
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','skstudiodb');
$del="DELETE FROM `contact` WHERE `c_id`='$id'";

$del1=mysqli_query($con,$del);

header("location:queries.php");

?>