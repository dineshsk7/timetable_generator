<?php
    require_once('../model/database.php');
    require_once('../model/teacher_db.php');
    require_once('../model/helpdesk_db.php');
    if(isset($_POST['signup']))
	{
		// get the values
		$username = $_POST['username'];
        $password = $_POST['password'];
        $type=$_POST['slct'];
    if((is_valid_teacher_exist($username) && $type=="teachers") || (is_valid_helpdesk_exist($username) && $type=="helpdesk")) {
            $error_message = "username is already exist";
            echo "<script>alert('$error_message')</script>";
    }
    else{
			
	try{
	
	$query="INSERT INTO $type(username,u_password) VALUES(?,?)";
    
    $stmt1= $db->prepare($query);
    $stmt1->execute([$username,$password]);
    

	
    if($type=="teachers"){
    try{
    $query1="CREATE TABLE $username(day_order int(10) primary key,h1 varchar(30) NOT NULL,h2 varchar(30) NOT NULL,h3 varchar(30) NOT NULL,h4 varchar(30) NOT NULL,h5 varchar(30) NOT NULL,h6 varchar(30) NOT NULL,h7 varchar(30) NOT NULL)";
    $db->exec($query1);
    $in="INSERT INTO $username(day_order,h1,h2,h3,h4,h5,h6,h7) values(?,?,?,?,?,?,?,?)";
    $stmt3=$db->prepare($in);
    for ($x = 1; $x <= 6; $x++) {
        $stmt3->execute([$x,'-','-','-','-','-','-','-']);
      }
    
    }
    catch (PDOException $ex)
{
	$error_message = $ex->getMessage();
          echo "<script>alert('$error_message')</script>";
    
}	
    


    $error_message= "Sucessfully added!";
    echo "<script>alert('$error_message,$type')</script>";

    header('Location: login.php');

    

	
}
   header('Location: login.php');
}
	catch (PDOException $ex)
{
	$error_message = $ex->getMessage();
          echo "<script>alert('$error_message')</script>";
    
}	
		
		
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