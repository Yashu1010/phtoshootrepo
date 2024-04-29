<?php
$id = $_REQUEST['id'];
$con=mysqli_connect('yashmysqlserver.mysql.database.azure.com','yash0101','gandhi2002@!','skstudiodb');
$del="DELETE FROM `gallary` WHERE `img_id`='$id'";

$del1=mysqli_query($con,$del);
if($del1){
    header("location:gallary1.php");

}
?>
