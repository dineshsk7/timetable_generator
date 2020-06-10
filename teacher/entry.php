<?php 
$s_id = $_POST['id'];
$s_name = $_POST['name'];
$s_subject = $_POST['subject'];
$s_periods = $_POST['periods'];
    require_once('../model/database.php');

   global $db;
   $query = "INSERT INTO staff
              VALUES
                 ('$s_id', '$s_name', '$s_subject','s_periods')";
    $db->exec($query);

    // Display the Product List page
    include('helpDesk.php');
    ?>