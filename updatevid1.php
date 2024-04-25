<?php
$id = $_REQUEST['id'];
$name = $_REQUEST['aname'];
$price = $_REQUEST['aprice'];

$conn=mysqli_connect('localhost','root','','skstudiodb');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($name!="" && $price!="")
{
 
$query="UPDATE `video` SET `id`='$id',`name`='$name',`price`='$price' WHERE `id`='$id'";    
$data=mysqli_query($conn,$query);
    if($data)
    {
        echo"data inserted into database $id, $name, $size, $price";
        header('location:editalbum.php');
    }
    else{
     echo "All fields are required $id, $name, $size, $price";   
    }
}
else
{
    header("location:updatealb.php");
    alert("error");
}

// header('location:editalbum.php');

?>