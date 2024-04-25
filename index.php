<?php
	session_start();
	include('function.php');
?>
<html>
	<head>
		<meta charset="utf-8">
			<link href="css/bootstrap.min.css" rel="stylesheet">
    		<link href="css/main.css" rel="stylesheet">
				<link rel="stylesheet" href="css/datepicker.css">
       	<script src="js/bootstrap-datepicker.js"></script>
		<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: #ffffff}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}</style>
		<title></title>
	</head>
	<!-- Modal Login -->
	<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
					<div class="form-group">
						<label>Username</label>
						<input class="form-control" id="luser" name="Username" type="text"/>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" id="lpass" name="Password" type="password"/>
					</div>
					<p id="login_error" style="color: red;"></p>
					<button class="btn btn-primary btn-block" onclick="login_account()">Login</button>
        </div>
      </div>
    </div>
	</div>

	<!-- Modal Register -->
	<div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div> -->
        <!-- <div class="modal-body">
					<center><h3 id="successReg"></h3></center>
					<div class="form-group">
						<label>Username</label>
						<input class="form-control" id="username" name="Username" onkeyup="user_check(this.value)" type="text"/>
						<p id="user"></p>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" id="password" name="Password" onkeyup="pass_check()" type="password"/>
						<p id="pass"></p>
					</div>
					<div class="form-group">
						<label>Re-type Password</label>
						<input class="form-control" id="password1" name="Password1" onkeyup="pass_check()" type="password"/>
						<p id="pass1"></p>
					</div>
					<button class="btn btn-primary btn-block" id="regist" onclick="submitReg()" disabled>Register</button>
        </div> -->
      </div>
    </div>
	</div>

	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#options">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#options1">
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
					</button>
        </div>
        <div class="collapse navbar-collapse navbar-left" id="options">
					<ul class="nav navbar-nav">
						<li><a id="home" href="#"><b> Home </b></a></li>
						<li><a id="photo" href="#"><b> Our Work </b></a></li>
						<li><a id="reserve" href="reserve.php"><b> Reserve </b></a></li>
						<li><a id="reserve" href="price_menu.php"><b> Price Menu </b></a></li>
					</ul>
        </div>
				<div class="collapse navbar-collapse navbar-right" id="options1">
					<ul class="nav navbar-nav">
						<?php
							include('loginNav.php');
						?>
					</ul>
        </div>
      </div>
    </nav>
		<div id="reservationModal" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-xl">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Reservation List</h4>
		      </div>
		      <div class="modal-body">
		        <table class="table">
							<thead>
								<tr>
									<th>Costumer Name</th>
									<th>Date</th>
									<th>Contact</th>
									<th>Event</th>
									<th>Address</th>
									<th>Photographer Name</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody id="bod">

							</tbody>
						</table>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<div id="reservedModal" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-xl">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Reserved List</h4>
		      </div>
		      <div class="modal-body">
		        <table class="table">
							<thead>
								<tr>
									<th>Costumer Name</th>
									<th>Date</th>
									<th>Contact</th>
									<th>Event</th>
									<th>Address</th>
									<th>Photographer Name</th>
									<th>Option</th>
								</tr>
							</thead>
							<tbody id="bod1">
							</tbody>
						</table>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<a name="home"></a>
		    
		    <div class="carousel-inner">
		      <div class="item active">
		        <div class="fill" style="background-image:url('img/sk55.jpg');"></div>
		        <div class="carousel-caption">
		          
		        </div>
		      </div>
		</div>
	<a name="photo"></a>
	<div class='photographer-section container-fluid'>
		<h1 class="text-center">Our work</h1>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}
			body{
				width: 100%;
				min-height: 100vh;
			}
			img{
				margin: 3px; 
			}
		</style>
			<body> 

	<!-- <img src="img/image/sk55.jpg" width=300 height=200>
	<img src="img/image/09.jpg" width=300 height=200> -->
<!-- gallary -->
<style>
      .img{
        width:300px;
        height: 200px;
        padding-top:10px;
      }
    </style>
<?php
  $con=mysqli_connect('localhost','root','','skstudiodb');
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
                        <div class=" mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent" style="float:left;">
                                <input type="hidden" name="id" value="<?php echo $row['img_id']; ?>">
                                <img class="img-fluid w-200 img" src="<?php echo $row['image'];?>" alt="">
                            </div>
                            
                            <!-- <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="Buynow.php" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div> -->
                        </div>
                    </div>
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

<!--gallary end-->
</body>
	<div class="vid">
		<h1> Videography</h1>
		<video src="video/Teaser.mp4" controls="controls" loop="loop" width="300"></video>
		<video src="video/highlight.mp4" controls="controls" loop="loop" width="300"></video>
		<video src="video/highlight song.mp4" controls="controls" loop="loop" width="300"></video>
		<video src="video/cenematic.mp4" controls="controls" loop="loop" width="300"></video>
	</div>
  <!-- <div class="reservation">
	<a name="reserve"></a>
	<div class="col-md-6 col-md-offset-3 text-center " >
		
		<h2>Reserve a Date?</h2>
		<div class="form-limit">
			<form>
				<div id="name-group" class="form-group ">
					<label class="control-label " for="name">
						Name
					</label>
					<input class="form-control" id="name" name="name" type="text" autocomplete="off"/>
				</div>
				<div id="email-group" class="form-group ">
					<label class="control-label" for="email">
						Email
					</label>
					<input class="form-control" id="email" name="email" type="text" autocomplete="off"/>
				</div>
				<div id="number-group" class="form-group ">
					<label class="control-label " for="number">
						Number
					</label>
					<input class="form-control" id="number" name="number" type="text" autocomplete="off"/>
				</div>
				<div id="photographer-group" class="form-group ">
					<label class="control-label" for="select">
						Select Photographer
					</label>
					<select class="select form-control" id="photographer" name="photographer">
						php(combofill)
					</select>
				</div>
				<span id="dateWarning"></span>
				<div id="date-group" class="form-group ">
					<label class="control-label" for="date">
						Date
					</label>
					<div class="input-group">
						<div class="input-group-addon">
				 			<i class="fa fa-calendar"></i>
						</div>
						<input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" autocomplete="off"/>
					</div>
				</div>
				<div class="form-group">
					<div>
						<button class="btn btn-primary " name="submit" id="submit">
				 			Submit
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="vector-w-foot"></div>
	</div>
</div> -->
	<script src="js/jquery.min.js"></script>
	<script src="js/register.js"></script>
	<script src="js/login.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap-datepicker3.css"/>
	<script src="js/main.js"></script>
<script> 

$(document).ready(function(){
    $(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";

        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true
        })
    });
})



</script>
</body>
</html>
