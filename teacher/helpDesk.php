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
    	global $db;
		$query = 'Select username from teachers';
		$names=$db->query($query);

?>
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="col-md-4 col-md-offset-4" id="login">
						<section id="inner-wrapper" class="login">
							<article>
								<form action="entry.php" method="POST">
								    <p class="text-center">Time table entry</p></p>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"> </i></span>
											<input type="text" name="id" class="form-control" placeholder="Enter Staff ID">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
											<select name="name" class="form-control">
  											<option >Select Staff Name</option>
 											 <?php
   											 foreach($names as $name) { ?>
     										 <option value="<?php echo $name ?>"><?php echo $name['username'] ?></option>
 											 <?php
   											 } ?>
</select> 
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="text" name="subject" class="form-control" placeholder="Enter Subject">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="text" name="Section" class="form-control" placeholder="Enter Section">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="text" name="periods" class="form-control" placeholder="Enter Number of Periods">
										</div>
									</div>

									  <button type="submit" class="btn btn-success btn-block">Submit</button>
								</form>
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
</style>
</body>
</html>