<?php include('nav1.php');?>
<html>
    <head>
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
          margin-top:100px;
        }
        body{
            background-color:#10a381
        }
    </style>
    </head>
    <body>
        <div>
	 	 	<h2 align="center" style="font-size: 35px; margin-top:80px; font-family:serif;">Add New Album Details </h2> 
            <form align="center" action="addalbum1.php" method='POST' enctype="multipart/form-data">
                <label align="left"; for="">Album Name:</label>
                <input type="text" name="aname" id="name"><br>
                <label align="left"; for="">Album Size: </label>
                <input type="text" name="asize" id="size"><br>
                <label align="left"; for="">Album Price:</label>
                <input type="number" name="aprice" id="price"><br>
                <input type="submit" class="btn btn-active"> 
            </form>
        </div>
</body>
</html>