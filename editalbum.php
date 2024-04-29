<!DOCTYPE html> 
<html> 
<head> 
	 	<title></title> 
	 	<?php include('nav.php');?> 
		<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
</head> 
<style> 
body{
	background-color: #10a381;

}
tr{
	background-color:white;
}
th,td{
    text-align:center;
}
 	.content-table{ 
					border: 1px solid white;
					font-family: serif;
					margin-top:20px; 	
					font-size: 0.9em;  	 	
					min-width: 400px;  	 	
					border-radius: 5px 5px 0 0;  	 	
					overflow: hidden; 
	 	 			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); 
					
	 	} 
 
	 	.content-table thead tr{ 
  					background-color: #1B6576;   
					color: #ffffff;   
					text-align: center; 
	 	 			font-weight: bold; 
	 	} 
 
 	.content-table th, .content-table td { 
	 	 	padding: 12px 15px; 
	 	} 
 
	 	.content-table tbody tr{ 
	 	 	border-bottom: 2px solid #dddddd; 
	 	} 
 
	.content-table tbody tr : nth-of-type(even){ 
	 	background-color: #f3f3f3; 
		} 
 
	.content-table tbody tr: last-of-type{  border-bottom: 2px solid #009879; 
		}  
 
	.content-table tbody tr: active-row{ 
	 	font-weight: bold; 
	 	color: #009879; 
		} 
</style> 
<body> 
	 	<div class="main-div"> 
	 	 	<h1 align="center" style="font-size: 32px; margin-top:80px; font-family:serif; color:white;">Album Details </h1> 
 
	 	 	<div class= "center-div"> 
	 	 	 	<div class="table-responsive"> 
 	 	 	 	<table class= "content-table" align="center"> 
 	 	 	 	 	 	<thead> 
 	 	 	 	 	 	 	<tr style="font-size: 20px;"> 
 	 	 	 	 	 	 	 	<th>ID</th> 
          	 	 	 	 	 	<th>Album Name</th>
 	 	 	 	 	 	 	 	<th>Size</th> 
 	 	 	 	 	 	 	 	<th>Price</th> 
 	 	 	 	 	 	 	 	<th>Options</th> 
 	 	 	 	 	 	 	 
 	 	 	 	 	 	 	</tr> 
 	 	 	 	 	</thead> 	
 	 	 
 	 	 	<tbody> 	
 	 	 	 	 	 	<?php 
$conn = mysqli_connect('yashmysqlserver.mysql.database.azure.com','yash0101','gandhi2002@!','skstudiodb'); 
 
$selectquery = "select * from album "; 
 
$query = mysqli_query($conn, $selectquery); 
while ($res = mysqli_fetch_array($query)){ 
 ?> 
 
        <tr class ="active-row" style="font-size: 20px;" text-align="center"> 
	 	<td><?php echo $res['id']; ?></td> 
 	 	<td><?php echo $res['name']; ?></td> 	 	
 	 	<td><?php echo $res['size']; ?></td> 
	 	<td><?php echo $res['price']; ?></td> 
	 	<td><a href="updatealb.php?id=<?php echo $res['id']; ?>" > <button style="background-color: #1B6576; 
	color: #ffffff; height:30px;"> Update </button></a> <a href="delalbum.php?id=<?php echo $res['id']; ?>" > 
    <button style="background-color: #1B6576;color: #ffffff; height:30px;">  Delete </button></a></td> 	 	
 	 
<?php 
 	} 
 
?> 
 
</tr> 
</tbody> 
</table> 	
</div> 	 	
</div> 	
</div> 
	 	<a href="addalbum.php"> 
	 	<button style="background-color: #1B6576; 
 	 	 	 	 	color: #ffffff;  font-size: 20px; position: fixed; font-family:serif;
                    top: 13%;width: 120px; height: 40px; right: 8%;">Add Album</button> 
	 	 	 	 	</a> 
						<div class="main-div"> 
	 	 	<h1 align="center" style="font-size: 32px; margin-top:40px; font-family:serif; color:white;">Videography Details </h1> 
 
	 	 	<div class= "center-div"> 
	 	 	 	<div class="table-responsive"> 
 	 	 	 	<table class= "content-table" align="center"> 
 	 	 	 	 	 	<thead> 
 	 	 	 	 	 	 	<tr style="font-size: 20px;"> 
 	 	 	 	 	 	 	 	<th>ID</th> 
          	 	 	 	 	 	<th>Videography Type</th> 
 	 	 	 	 	 	 	 	<th>Price</th>  
								<th>Options</th>
 	 	 	 	 	 	 	</tr> 
 	 	 	 	 	</thead> 	
 	 	 
 	 	 	<tbody> 	
 	 	 	 	 	 	<?php 
$conn = mysqli_connect('localhost','root','','skstudiodb'); 
 
$selectquery = "select * from video"; 
 
$query = mysqli_query($conn, $selectquery); 
while ($res = mysqli_fetch_array($query)){ 
 ?> 
 
        <tr class ="active-row" style="font-size: 20px;" text-align="center"> 
	 	<td><?php echo $res['id']; ?></td> 
 	 	<td><?php echo $res['name']; ?></td> 	 	
	 	<td><?php echo $res['price']; ?></td>
		<td><a href="updatevid.php?id=<?php echo $res['id']; ?>" > <button style="background-color: #1B6576; 
	color: #ffffff; height:30px;"> Update </button></a> <a href="delvedio.php?id=<?php echo $res['id']; ?>" > 
    <button style="background-color: #1B6576;color: #ffffff; height:30px;">  Delete </button></a></td>
<?php 
 	} 
 
?> 
 
</tr> 
</tbody> 
</table> 	
</div> 	 	
</div> 	
</div>

	 	<a href="addvideo.php"> 
	 	<button style="background-color: #1B6576; color: #ffffff; 
		font-size: 15px; position: fixed; font-family:serif;
        bottom: 8%; width: 140px; height: 50px; right: 8%;">Add Videography<br>Type</button> 
	 	 	 	 	</a> 
 
 
</body> 
</html> 
