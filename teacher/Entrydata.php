<?php include('../view/header.php');?>
<?php
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
?>
<form action="" method="post" >
		<label>Staff ID</label>
		<input type="text" name="" placeholder="Enter staff ID"><br><br>
		<label>Staff Name</label>
		<input type="text" name="" placeholder="Enter Staff Name"><br><br>
		<label>Subject</label>
		<input type="text" name="" placeholder="Enter Subject"><br><br>
		<label>Section</label>
		<input type="" name="" placeholder="Section"><br><br>
		<label>Periods required</label>
		<input type="" name="" placeholder="Enter number of periods"><br><br>
    <input type="button" value="Submit" name="submit"><br><br>
    <input type="button" value="Back" name="back">
		<form action="" method = "POST">
			<input type="submit" value="Logout" name="logout">
		</form>
	</form>
<?php include('../view/footer.php');?>