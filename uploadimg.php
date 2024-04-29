<?php
if($_POST['submit'])
{
$filename= $_FILES["image"]["name"];
$tempname= $_FILES["image"]["tmp_name"];

$folder="image/".$filename; 
$conn=mysqli_connect('yashmysqlserver.mysql.database.azure.com','yash0101','gandhi2002@!','skstudiodb');
move_uploaded_file($tempname,$folder);
if($filename!="")
{
 
  $query="INSERT INTO `gallary`(`image`) VALUES ('$folder')";    
    $data=mysqli_query($conn,$query);
    if($data)
    {
        echo"data inserted into database";
        // header('location:gallary.php');
    }
    else{
     echo "All fields are required";   
    }
}
else
{
    header("location:index.php");
}
}
header("location:gallary1.php");
?>
