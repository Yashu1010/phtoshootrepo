<!-- search.php -->
<?php include('nav2.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Reservation</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
            margin-left:20%;
            background-color:white;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
        h2{
          margin-top:80px;
        }
        body{
            background-color:#10a381
        }
    </style>
</head>
<body align=center>
    <h2>Search Reservation</h2>
    <form method="POST">
        <label for="search">Search Name:</label>
        <input type="text" name="search" id="search">
        <button type="submit">Search</button>
    </form>

    <?php
    $conn = mysqli_connect('localhost','root','','skstudiodb'); 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $search = $_POST['search'];
    if($search!=""){

        $sql = "SELECT * FROM reserve WHERE name LIKE '%$search%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Id</th><th>Name</th><th>Date</th><th>Email</th><th>Number</th><th>Event</th><th>Address</th><th>Options</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["date"]."</td><td>".$row["email"]."</td><td>".$row["number"]."</td><td>".$row["event"]."</td><td>".$row["address"]."</td>
                <td><input class='btn btn-danger' type='button' data-value=".$row['id']." onclick='cancelRes($(this).data().value)' name='delete' value='Cancel'></td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "No results found";
        }
    }
  }
    ?>

</body>
</html>
