<?php  

    if(!isset($_POST['generate']))
    {
        header('Location: ../authenticate/login.php');
    }
    $name=$_POST['name'];
    $day=$_POST['day'];
    $hour=$_POST['hour'];
    $class=$_POST['class'];
    if(empty($name) || empty($day) || empty($hour) || empty($class)){
	include('../teacher/generate.php');
    $error_message= "All Fields are required";
    echo "<script>alert('$error_message')</script>";
    }


    else {
   	require_once('../model/database.php');

    try{
   	global $db;
   	$count=0;
	$sql = "SELECT count(*) FROM $name WHERE h1 = ?"; 
	$result = $db->prepare($sql); 
	$result->execute(['-']); 
	$number_of_rows = $result->fetchColumn();
	$count+=$number_of_rows;  	
	$sql = "SELECT count(*) FROM $name WHERE h2 = ?"; 
	$result = $db->prepare($sql); 
	$result->execute(['-']); 
	$number_of_rows = $result->fetchColumn();
	$count+=$number_of_rows;
	$sql = "SELECT count(*) FROM $name WHERE h3 = ?"; 
	$result = $db->prepare($sql); 
	$result->execute(['-']); 
	$number_of_rows = $result->fetchColumn();
	$count+=$number_of_rows;
	$sql = "SELECT count(*) FROM $name WHERE h4 = ?"; 
	$result = $db->prepare($sql); 
	$result->execute(['-']); 
	$number_of_rows = $result->fetchColumn();
	$count+=$number_of_rows;
	$sql = "SELECT count(*) FROM $name WHERE h5 = ?"; 
	$result = $db->prepare($sql); 
	$result->execute(['-']); 
	$number_of_rows = $result->fetchColumn();
	$count+=$number_of_rows;
	$sql = "SELECT count(*) FROM $name WHERE h6 = ?"; 
	$result = $db->prepare($sql); 
	$result->execute(['-']); 
	$number_of_rows = $result->fetchColumn();
	$count+=$number_of_rows;
	$sql = "SELECT count(*) FROM $name WHERE h7 = ?"; 
	$result = $db->prepare($sql); 
	$result->execute(['-']); 
	$number_of_rows = $result->fetchColumn();
	$count+=$number_of_rows;
	$sql = "SELECT count(*) FROM $name WHERE h8 = ?"; 
	$result = $db->prepare($sql); 
	$result->execute(['-']); 
	$number_of_rows = $result->fetchColumn();
	$count+=$number_of_rows;

	$count=48-$count;
	$query = 'Select s_name from staff';
	$names=$db->query($query);

	$sql = "SELECT s_periods from staff where s_name = ?"; 
	$result = $db->prepare($sql); 
	$result->execute([$name]); 
	foreach ($result as $period) {
		# code...
		$val=$period[0];
	}
	if($count>$val){
	include('../teacher/generate.php');
    $error_message= "We can't allocate for this staff";
    echo "<script>alert('$error_message')</script>";
	}
	else{
	$sql = "SELECT $hour from $name where day_order = ?"; 
	$result = $db->prepare($sql); 
	$result->execute([$day]); 
	foreach ($result as $key) {
		# code...
		if($key[0]=="-"){
			$checker1=1;
		}
		else{
			$checker1=0;
		}
	}
	$sql = "SELECT $hour from $class where day_order = ?"; 
	$result = $db->prepare($sql); 
	$result->execute([$day]); 
	foreach ($result as $key) {
		# code...
		if($key[0]=="-"){
			$checker2=1;
		}
		else{
			$checker2=0;
		}
	}
	if($checker1==1 && $checker2==1){
$sql = "UPDATE $name SET $hour=? WHERE day_order=?";
$stmt= $db->prepare($sql);
$stmt->execute([$class,$day]);

$sql = "UPDATE $class SET $hour=? WHERE day_order=?";
$stmt= $db->prepare($sql);
$stmt->execute([$name,$day]);

header('Location: ../teacher/generate.php');
	}
	else{
		if($checker1==0){
	include('../teacher/generate.php');
    $error_message= "already this hour is allocated for this staff";
    echo "<script>alert('$error_message')</script>";
		}
		else{
	include('../teacher/generate.php');
    $error_message= "already this class is allocated for this hour";
    echo "<script>alert('$error_message')</script>";			
		}
	}
	
    }
}

    catch (PDOException $ex)
{
	$error_message = $ex->getMessage();
          echo "<script>alert('$error_message')</script>";
    
}	
    }

?>