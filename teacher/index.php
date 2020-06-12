<?php
    session_start();
    if(!isset($_SESSION['teacher']))
    {
        header('Location: ../authenticate/login.php');
    }
    if(isset($_POST['logout']))
    {
        unset($_SESSION['teacher']);
        header('Location: ../authenticate/login.php');
    }
    require_once('../model/database.php');
    global $db;
		$query = 'Select username from teachers';
		$names=$db->query($query);
		$sql = "SHOW TABLES";
  		$statements = $db->prepare($sql);
          $statements->execute();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher screen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<h1> Teacher Screen </h1>
<form action = "show.php" method = "POST">
<label class="lable">Name</label>

<div class="select">
    <select name="staff" id="slct" required>
    <option selected disabled>Choose Staff Name</option>
    <?php
   	foreach($names as $name) { ?>
    <option value="<?php echo $name['username'] ?>"><?php echo $name['username'] ?></option>
 	<?php
   	} ?>
    </select>
</div>

<button class="button" style="vertical-align:middle" data-target="#mymodel"  data-toggle="modal" name="staffcheck"><span>ViewTimeTable </span></button>
</from>

<form action = "show.php" method = "POST">
<label class="lable">Section</label>

<div class="select">
    <select name="class" id="slct" required>
    <option selected disabled>Choose Section</option>
    <?php
   	foreach($statements as $statement) { if (!ctype_alpha($statement[0])){ ?>
    <option value="<?php echo $statement[0] ?>"><?php echo $statement[0]; }?></option>
 	<?php
   	} ?>
</select>
</div>
<button class="button" style="vertical-align:middle" data-target="#mymodel"  data-toggle="modal" name="classcheck"><span>ViewTimeTable </span></button>
</form>
<form action = "" method = "POST">
    <input type="submit" class="Logout" value="Logout" name = "logout">
</form>



</div>
					

<style> 
body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: black;
}
h1 {
    margin: 0 0 0.25em; 
    color: white;
    font-weight: 800;
    font-size: 50px;
    
}
select {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    appearance: none;
    outline: 0;
    box-shadow: none;
    border: 0 !important;
    background: #fb2525;
    background-image: none;
}
select::-ms-expand {
display: none;
}
.select {
    position: relative;
    display: flex;
    width: 35em;
    height: 3.5em;
    line-height: 3;
    background: #2c3e50;
    overflow: hidden;
    border-radius: 15px;
    margin:0 50px;
}
select {
    flex: 1;
    padding: 0 .5em;
    color: #fff;
    cursor: pointer;
    
}
.select::after {
    content: '\25BC';
    position: absolute;
    top: 0;
    right: 0;
    padding: 0 1em;
    background: #fb2525;
    cursor: pointer;
    pointer-events: none;
    -webkit-transition: .25s all ease;
    -o-transition: .25s all ease;
    transition: .25s all ease;
}
.select:hover::after {
    color: rgb(221, 240, 51);
}
.lable{
      text-align: right;
      font-weight: 800;
      
      margin:0 50px;
      padding-bottom: 30px;
      padding-top: 30px;
      font-size: xx-large;
      color: white;
}
.button {
    display: inline-block;
    border-radius: 25px;
    background-color:#2c3e50;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 25px;
    padding: 10px;
    width: 20em;
    transition: all 0.5s;
    cursor: pointer;
    margin: 50px;
}
.button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
}
.button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
}
.button:hover span {
    padding-right: 25px;
}
.button:hover span:after {
    opacity: 1;
    right: 0;
}
select option{
    font-size: 17px;
}
.Logout{
        background-color: #2c3e50; 
        border: none;
        color: white;
        padding: 15px 32px ;
        text-align: left;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; 
        transition-duration: 0.4s;    
        border-radius: 10em;  
}
.Logout:hover {
    box-shadow: 0 12px 16px 0 rgba(248, 245, 245, 0.24),0 17px 50px 0 rgba(245, 245, 243, 0.19);
}
form{
    margin: 0 35%;
}
</style> 
</body>
</html>
