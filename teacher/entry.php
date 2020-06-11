<?php 
$s_id = $_POST['id'];
$s_name = $_POST['name'];
$s_subject = $_POST['subject'];
$s_periods = $_POST['periods'];
    require_once('../model/database.php');

    try{
   global $db;
   $query = "INSERT INTO staff(s_id,s_name,s_subject,s_periods) VALUES(?,?,?,?)";
   $stmt1= $db->prepare($query);
   $stmt1->execute([$s_id,$s_name,$s_subject,$s_periods]);
   header('Location: helpDesk.php');
   $error_message= "Sucessfully added!";
    echo "<script>alert('$error_message')</script>";
    }


    catch (PDOException $ex)
{
	$error_message = $ex->getMessage();
          echo "<script>alert('$error_message')</script>";
    
}	
    // Display the Product List page
    
    ?>