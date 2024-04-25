<?php
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','skstudiodb');
$del="DELETE FROM `album` WHERE `id`='$id'";

$del1=mysqli_query($con,$del);

header("location:editalbum.php");

?>