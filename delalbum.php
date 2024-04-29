<?php
$id=$_GET['id'];
$con=mysqli_connect('yashmysqlserver.mysql.database.azure.com','yash0101','gandhi2002@!','skstudiodb');
$del="DELETE FROM `album` WHERE `id`='$id'";

$del1=mysqli_query($con,$del);

header("location:editalbum.php");

?>
