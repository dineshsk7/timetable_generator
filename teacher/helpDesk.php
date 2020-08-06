<?php
	require_once('../model/database.php');
	session_start();
    if(!isset($_SESSION['helpdesk']))
    {
        header('Location: ../authenticate/login.php');
    }
    if(isset($_POST['logout']))
    {
        unset($_SESSION['helpdesk']);
        header('Location: ../authenticate/login.php');
    }
        if(isset($_POST['back']))
    {
        header('Location: helpdeskindex.php');
    }
    	global $db;
		$query = 'Select username from teachers';
		$names=$db->query($query);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<div class="col-md-4 col-md-offset-4" id="login">
						<section id="inner-wrapper" class="login">
							<article>
								<form action="../model/helpDesk.php" method="POST">
								    <h3 class="text-center"><b>Time table entry</b></h3>
								    <p style="color: grey; font-size: .93em;">[Fill in all the fields to create timetable]</p>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fas fa-user-tag"></i></span>
											<input type="text" name="id" class="form-control" placeholder="Enter Staff ID [use only 6 digits]" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<select name="name" class="form-control" required>
  											<option value="">Select Staff Name</option>
 											 <?php
   											 foreach($names as $name) { ?>
     										 <option value="<?php echo $name['username'] ?>"><?php echo $name['username'] ?></option>
 											 <?php
   											 } ?>
</select> 
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fas fa-address-book"> </i></span>
											<input type="text" name="subject" class="form-control" placeholder="Enter Subject" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fas fa-clock"> </i></span>
											<input type="text" name="periods" class="form-control" placeholder="Enter Number of Periods" required>
										</div>
									</div>

									  <button type="submit" class="btn btn-danger btn-block">Submit</button></form>
									  <div>
									  <form style="float: right;" action = "" method = "POST">
    <button class="Logout" type="submit" name = "logout">logout</button>
								</form>
								<form style="float: left;" action = "" method = "POST">
    <button class="Logout" type="submit" name = "back">back</button>
								</form>
							</div>
							</article>
						</section>
					</div>


<style>
	
	body {
    background:#333;
}
#login {
	-webkit-perspective: 1000px;
	-moz-perspective: 1000px;
	perspective: 1000px;
	margin-top:50px;
	margin-left:30%;
}
.login {
	font-family: 'Josefin Sans', sans-serif;
	-webkit-transition: .3s;
	-moz-transition: .3s;
	transition: .3s;
	-webkit-transform: rotateY(40deg);
	-moz-transform: rotateY(40deg);
	transform: rotateY(40deg);
}
.login:hover {
	-webkit-transform: rotate(0);
	-moz-transform: rotate(0);
	transform: rotate(0);
}
.login article {
	
}
.login .form-group {
	margin-bottom:17px;
}
.login .form-control,
.login .btn {
	border-radius:0;
}
.login .btn {
	text-transform:uppercase;
	letter-spacing:3px;
}
.input-group-addon {
	border-radius:0;
	color:#fff;
	background:#f3aa0c;
	border:#f3aa0c;
}
.forgot {
	font-size:16px;
}
.forgot a {
	color:#333;
}
.forgot a:hover {
	color:#5cb85c;
}

#inner-wrapper, #contact-us .contact-form, #contact-us .our-address {
    color: #1d1d1d;
    font-size: 19px;
    line-height: 1.7em;
    font-weight: 300;
    padding: 50px;
    background: #fff;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    margin-bottom: 100px;
}
.input-group-addon {
    border-radius: 0;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    color: #fff;
    background: #f3aa0c;
    border: #f3aa0c;
        border-right-color: rgb(243, 170, 12);
        border-right-style: none;
        border-right-width: medium;
}
.Logout{
        background-color: #2c3e50; 
        border: none;
        color: white;
        padding: 5px 35px;
        text-align: left;
        text-decoration: none;
        display: inline-block;
        font-size: 10px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; 
        transition-duration: 0.4s;    
        border-radius: 10em;  
}
.Logout:hover {
    box-shadow: 0 12px 16px 0 rgba(248, 245, 245, 0.24),0 17px 50px 0 rgba(245, 245, 243, 0.19);
}
</style>
</body>
</html>