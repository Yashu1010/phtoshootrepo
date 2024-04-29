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
	 	 	<h1 align="center" style="font-size: 32px; margin-top:80px; font-family:serif; color:white;">Customer Queries </h1> 
 
	 	 	<div class= "center-div"> 
	 	 	 	<div class="table-responsive"> 
 	 	 	 	<table class= "content-table" align="center"> 
 	 	 	 	 	 	<thead> 
 	 	 	 	 	 	 	<tr style="font-size: 20px;"> 
 	 	 	 	 	 	 	 	<th>ID</th> 
          	 	 	 	 	 	<th>Customer Name</th>
                                <th>Email</th> 
 	 	 	 	 	 	 	 	<th>Description</th>
                                <th>Option</th>
 	 	 	 	 	 	 	</tr> 
 	 	 	 	 	</thead> 	
 	 	 
 	 	 	<tbody> 	
 	 	 	 	 	 	<?php 
$conn = mysqli_connect('yashmysqlserver.mysql.database.azure.com','yash0101','gandhi2002@!','skstudiodb'); 
 
$selectquery = "select * from contact"; 
 
$query = mysqli_query($conn, $selectquery); 
while ($res = mysqli_fetch_array($query)){ 
 ?> 
 
        <tr class ="active-row" style="font-size: 20px;" text-align="center"> 
	 	<td><?php echo $res['c_id']; ?></td> 
 	 	<td><?php echo $res['Name']; ?></td> 	 	
	 	<td><?php echo $res['email']; ?></td>
        <td><?php echo $res['Description']; ?></td> 
	 	<td><a href="delquery.php?id=<?php echo $res['c_id']; ?>" > 
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
 
 
</body> 
</html> 
