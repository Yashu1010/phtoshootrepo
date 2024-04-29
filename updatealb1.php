<?php
$id = $_REQUEST['id'];
$name = $_REQUEST['aname'];
$size = $_REQUEST['asize'];
$price = $_REQUEST['aprice'];

$conn=mysqli_connect('yashmysqlserver.mysql.database.azure.com','yash0101','gandhi2002@!','skstudiodb');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($name!="" && $size!="" && $price!="")
{
 
$query="UPDATE `album` SET `id`='$id',`name`='$name',`size`='$size',`price`='$price' WHERE `id`='$id'";    
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
