<?php
    require_once('../model/database.php');
    if(isset($_POST['signup']))
	{
		// get the values
		$username = $_POST['username'];
        $password = $_POST['password'];
        $type=$_POST['slct'];

			
	try{
	
	$query="INSERT INTO $type(username,u_password) VALUES(?,?)";
	$stmt1= $db->prepare($query);
	$stmt1->execute([$username,$password]);
	
	
    $error_message= "Sucessfully added!";
    echo "<script>alert('$error_message,$type')</script>";
    header('Location: login.php');

	
}
	catch (PDOException $ex)
{
	$error_message = $ex->getMessage();
          echo "<script>alert('$error_message')</script>";
    
}	
		
		
	}

?>

<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
<body>
    <div class="loginbox">
    <img src="signup.png" class="avatar">
        <h1>Sign up</h1>
        <form action="" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">

            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <p> Select</p>
            <br>    
            <div class="select">
                <select name="slct" id="slct">
                    <option selected disabled>Choose an option</option>
                    <option value="teachers">Teacher</option>
                    <option value="helpdesk">Helpdesk</option>
                 </select>
            </div>

                <br><br>
            <form action = "signup.php" method = "POST">
                <input type="submit" name="signup" value="Sign Up">
            </form>
            <form action = "login.php" method = "POST">
                <input type="submit" name="" value="Login">
            </form>
        </form>
        
    </div >

</body>
</head>
</html>