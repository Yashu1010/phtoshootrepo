<?php include('nav1.php') ?>
<?php 
$conn=mysqli_connect('yashmysqlserver.mysql.database.azure.com','yash0101','gandhi2002@!','skstudiodb');

$t = $_GET['id'];
function getReservationDetails($conn, $t) {
    $sql = "SELECT * FROM video WHERE id = $t";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

// Check if reservation ID is provided in the URL
if (isset($_GET['id'])) {
    $t = $_GET['id'];
    $tem = getReservationDetails($conn, $t);
} else {
    // Handle error if reservation ID is not provided
    echo "Reservation ID not provided.";
    exit;
}
?>
<html>
    <head>
    
    </head>
    <body>
        <div>
	 	 	<h1 align="center" style="font-size: 35px; margin-top:90px; font-family:serif;">Update Videography Details </h1> 
            <form align="center" action="updatevid1.php" method='POST' enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $t; ?>">
                <label align="left"; for="">Name:</label>
                <input type="text" name="aname" id="name" value="<?php echo $tem['name']; ?>"><br>
                <label align="left"; for="">Album Price:</label>
                <input type="number" name="aprice" id="price" value="<?php echo $tem['price']; ?>"><br>
                <input type="submit"> 
            </form>
        </div>
</body>
</html>
