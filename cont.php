<?php

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$desc = $_REQUEST["description"];

$conn=mysqli_connect('yashmysqlserver.mysql.database.azure.com','yash0101','gandhi2002@!','skstudiodb');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($name!="" && $email!="" && $desc!="")
{
 
$query="INSERT INTO `contact`(`name`, `email`, `description`) VALUES ('$name', '$email', '$desc')";    
$data=mysqli_query($conn,$query);
    if($data)
    {
        echo"data inserted into database";
        header('location:index.php');
    }
    else{
     echo "All fields are required";   
    }
}
else
{
    header("location:index.php");
    alert("error");
}

// header('location:editalbum.php');
?>
