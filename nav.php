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
	<!-- <div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
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
        </div>
      </div>
    </div>
	</div> -->

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
						<li><a id="home" href="index.php"><b> Home </b></a></li>
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
