<?php

$name = $_REQUEST["aname"];
$size = $_REQUEST["asize"];
$price = $_REQUEST["aprice"];

$conn=mysqli_connect('yashmysqlserver.mysql.database.azure.com','yash0101','gandhi2002@!','skstudiodb');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($name!="" && $size!="" && $price!="")
{
 
$query="INSERT INTO `album`(`name`, `size`, `price`) VALUES ('$name', '$size', '$price')";    
$data=mysqli_query($conn,$query);
    if($data)
    {
        echo"data inserted into database";
        header('location:editalbum.php');
    }
    else{
     echo "All fields are required";   
    }
}
else
{
    header("location:editalbum.php");
    alert("error");
}

// header('location:editalbum.php');
?>
