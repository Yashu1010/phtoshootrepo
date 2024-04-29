<?php include('nav1.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <style>
      body{
        font-family:serif;
      }
      img{
        width:350px;
        height: 270px;
        padding-top:10px;
      }
      form{
        padding-top:10px;
        align:center;
      }
      h2{
        padding-top:70px;
        text-align:center;
      }

      .btn{
        decoration:none;
        width:100px;
        height: 50px;
        margin-top:20px;
        margin-left:100px;
        background-color:#1B6576;
        color:white;
        font-family:serif;
        font-size:20px;
      }
      .btn1{
        background-color:#1B6576;
        color:white;
        font-family:serif;
        font-size:20px;
        border:0;
      }
      input{
        margin-top:10px;
        margin-left:550px;
      }
    </style>
    <title>Document</title>
    <body>
      <h2>Add Images</h2>
    <form  action="uploadimg.php" method="POST" enctype="multipart/form-data">
            <input class="btn1" type="file" name="image" id="image">
            <input class="btn1" type="submit" name="submit" value="Submit" action="uploadimg.php"/>
    </form>
  
  <?php
  $con=mysqli_connect('yashmysqlserver.mysql.database.azure.com','yash0101','gandhi2002@!','skstudiodb');
  //include "config.php";
  $sql="SELECT * FROM gallary";
  $result=mysqli_query($con,$sql) or die("query unsuccessfull");

  if(mysqli_num_rows($result)>0){}
  ?>
  
<div class="content-wrapper">

<div class="card">
          <div class="card-header">
            <!-- <h3 class="card-title">Our Work<TABLE></TABLE></h3> -->
             
          
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <!-- <th>IMAGE</th> -->
              </tr>
              </thead>
              <tbody>
              <?php
  while($row=mysqli_fetch_assoc($result)){
?>
<div class="col-lg-4  " >
  <form action="delimg.php" method="POST">
                        <div class=" mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent" style="float:left;">
                                <input type="hidden" name="id" value="<?php echo $row['img_id']; ?>">
                                <img class="img-fluid w-200" src="<?php echo $row['image'];?>" alt="">
                            </div>
                            
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <!-- <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a> -->
                                <input type="submit" value="Delete" class="btn">
                            </div>
                        </div>
                    </div>
  </form>
<?php } ?>
<?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
                    
                    <?php
}
                    ?>
             
              </tbody>
              
            </table>
          </div>
          <!-- /.card-body -->
        </div>
</div>
<!-- /.content-wrapper -->
</body>
</html>
