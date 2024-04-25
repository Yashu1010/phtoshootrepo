<?php
$id = $_REQUEST['id'];
$con=mysqli_connect('localhost','root','','skstudiodb');
$del="DELETE FROM `gallary` WHERE `img_id`='$id'";

$del1=mysqli_query($con,$del);
if($del1){
    header("location:gallary1.php");

}
?>