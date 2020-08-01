<?php include('../view/header.php');?>
<?php
    require_once('../model/database.php');
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

global $db;
        $query = 'Select section from teachers where username=$_SESSION["teacher"]';
        $section=$db->query($query);
        $id='Select section from teachers where username=$_SESSION["teacher"]';
        ?>
<div class="loginbox">
    <h1><?php echo($_SESSION['teacher']) ?></h1><br>
   <form action="show.php" method="POST">
        <button type="submit" data-target="#mymodel"  data-toggle="modal" name="staff" value="<?php echo($_SESSION['teacher']) ?>">My Time Table</button>
    </form>
    <form action="" method="POST">
        <button type="submit">Other Sections</button>
    </form>
    <form action = "" method = "POST">
    <button type="submit" name = "logout">Logout</button>
</form>
    </div>
  <style>
  body{
    margin: 0;
    padding: 0;
    background: black;
    background-size: cover;
    background-position: center;
    font-family:sans-serif;
}
.loginbox{
    width: 320px;
    height: 420px;
    background: #000;
    color: #fff;
    top:50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%); 
    box-sizing: border-box;
    padding: 70px 30px;
    
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);

}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;

}
.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.loginbox button{
    width: 100%;
    margin-bottom:20px;

}
.loginbox input[type="text"],input[type="password"]
{
    border:none;
    border-bottom: 1px solid #fff;
    background:transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox button[type="submit"]{
    border:none;
    outline: none;
    height: 40px;
    background:#fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}
.loginbox button[type="submit"]:hover{
    cursor: pointer;
    background:#ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color:darkgrey;

} 
.loginbox a:hover{
    color:#ffc107;
}

  </style>
<?php include('../view/footer.php');?>

