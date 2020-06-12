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
    if(isset($_POST['classcheck'])){
        $val=$_POST['class'];
    }
    if(isset($_POST['staffcheck'])){
        $val=$_POST['staff'];
    }
    
    $query = "Select * from $val";
	$names=$db->query($query);
    
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

<center><h1><?php echo $val ?> Time Table  </h1>
<table>
 <tr>
   <th>Order</th>
   <th>I</th>
   <th>II</th>
   <th>III</th>
   <th>IV</th>
   <th>V</th>
   <th>VI</th>
   <th>VII</th>
   <th>IX</th>
  </tr>
 
  
  
    <?php
   	foreach($names as $name) { ?>
    <tr>
    <td><?php echo $name['day_order'] ?></td>
    <td><?php echo $name['h1'] ?></td>
    <td><?php echo $name['h2'] ?></td>
    <td><?php echo $name['h3'] ?></td>
    <td><?php echo $name['h4'] ?></td>
    <td><?php echo $name['h5'] ?></td>
    <td><?php echo $name['h6'] ?></td>
    <td><?php echo $name['h7'] ?></td>
    <td><?php echo $name['h8'] ?></td>
    
  </tr>
 	<?php
    } ?>
    
   
  
  </table></center>

  <input type="submit" class="Logout" value="Print" onclick="window.print()">

<style> 
body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: black;
    background-image:linear-gradient(to top,#E100FF,#7F00FF);
}
h1 {
    margin: 20px 0px; 
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
      padding-right: 14em;
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
        margin: 25px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; 
        transition-duration: 0.4s;    
        border-radius: 10em;  
}
.Logout:hover {
    box-shadow: 0 12px 16px 0 rgba(248, 245, 245, 0.24),0 17px 50px 0 rgba(245, 245, 243, 0.19);
}
table,th,td{
  position;absolute;
  border-collapse:collapse;
  border:1px solid gray;
  padding:10px;
  text-align:center;
  font-weight:bold;
  font-size:30px;
  color:white;
   
}

</style> 
</body>
</html>
