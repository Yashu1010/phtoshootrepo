<?php
    
    include('nav.php');
?>
<html>
<head>
		<meta charset="utf-8">
			<link href="css/bootstrap.min.css" rel="stylesheet">
    		<link href="css/main.css" rel="stylesheet">
				<link rel="stylesheet" href="css/datepicker.css">
       	<script src="js/bootstrap-datepicker.js"></script>
		<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: #ffffff}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}
	body{
		background-color: #10a381;
	}
	.a1{
		margin-top:100px;
	}
	</style>
		<title></title>
	</head>
    
    <body>
       
    <a  name="reserve"></a>
	<div class="col-md-6 col-md-offset-3 text-center " >
		
		<h2 class="a1">Reserve a Date?</h2>
		<div class="form-limit">
			<form onsubmit="return validateForm()">
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
						<?php comboFill(PHOTOGRAPHER_TABLE); ?>
					</select>
				</div>
				<div id="name-group" class="form-group ">
					<label class="control-label " for="event">
						Event
					</label>
					<input class="form-control" id="event" name="event" type="text" autocomplete="off"/>
				</div>
				<div id="name-group" class="form-group ">
					<label class="control-label " for="address">
						Event Address
					</label>
					<input class="form-control" id="address" name="address" type="text" autocomplete="off"/>
				</div>
				<div id="album-group" class="form-group ">
					<label class="control-label" for="select">
						Select Album Type
					</label>
					<select class="select form-control" id="album" name="album">
						<?php comboFill(ALBUM_TABLE); ?>
					</select>
				</div>
				<div id="video-group" class="form-group ">
					<label class="control-label" for="select">
						Select Videography Type
					</label>
					<select class="select form-control" id="video" name="video">
						<?php comboFill(VIDEO_TABLE); ?>
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
</div>
<!-- 	<script src="js/jquery.min.js"></script>
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

</script> -->
<script>
    // Validation function for name
    function validateName(name) {
        var regex = /^[a-zA-Z\s]+$/;
        return regex.test(name);
    }

    // Validation function for email
    function validateEmail(email) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    Validation function for phone number
    function validateNumber(number) {
        var regex = /^\d{10}$/;
        return regex.test(number);
    }

    function validateForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var number = document.getElementById("number").value;

        if (!validateName(name)) {
            alert("Please enter a valid name.");
            return false;
        }

        if (!validateEmail(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        if (!validateNumber(number)) {
            alert("Please enter a valid phone number.");
            return false;
        }

        // If all validations pass, form can be submitted
        return true;
    }
</script>
    </body>
</html>
