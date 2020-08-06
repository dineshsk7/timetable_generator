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
        if(isset($_POST['back']))
    {
        header('Location: helpdeskindex.php');
    }
        require_once('../model/database.php');
    if(isset($_POST['enter']))
    {
        // get the values
        $table=$_POST['class'];
    
    try{
    $query1="CREATE TABLE $table(day_order int(10) primary key,h1 varchar(30) NOT NULL,h2 varchar(30) NOT NULL,h3 varchar(30) NOT NULL,h4 varchar(30) NOT NULL,h5 varchar(30) NOT NULL,h6 varchar(30) NOT NULL,h7 varchar(30) NOT NULL)";
    $db->exec($query1);
    $in="INSERT INTO $table(day_order,h1,h2,h3,h4,h5,h6,h7) values(?,?,?,?,?,?,?,?)";
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
    echo "<script>alert('$error_message,$table')</script>";

    

    
}
        
        


        global $db;
        $query = 'Select username from teachers';
        $names=$db->query($query);
        $sql = "SHOW TABLES";
        $statements = $db->prepare($sql);
        $statements->execute();

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<div class="col-md-4 col-md-offset-4" id="login">
                        <section id="inner-wrapper" class="login">
                            <article>
                                <form  action="../model/generate.php" method="POST">
                                    <h3 class="text-center"><b>Generate Time Table</b></h3>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"> </i></span>
                                            <select name="name" class="form-control">
                                            <option value="" selected>Select Staff Name</option>
                                             <?php
                                             foreach($names as $name) { ?>
                                             <option value="<?php echo $name['username'] ?>"><?php echo $name['username'] ?></option>
                                             <?php
                                             } ?>
</select> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fas fa-calendar"> </i></span>
                                            <select name="day" class="form-control">
                                            <option value="" selected>Select Day</option>
                                             <?php
                                             for($i=1;$i<=6;$i++) { ?>
                                             <option value="<?php echo $i ?>"><?php echo("Day ".strval($i)) ?></option>
                                             <?php
                                             } ?>
</select> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fas fa-clock"> </i></span>
                                            <select name="hour" class="form-control">
                                            <option value="" selected>Select Hour</option>
                                             <?php
                                             for($i=1;$i<=7;$i++) { ?>
                                             <option value="<?php echo "h".strval($i) ?>"><?php echo("Hour ".strval($i)) ?></option>
                                             <?php
                                             } ?>
</select> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fas fa-door-open"> </i></span>
                                            <select name="class" class="form-control">
                                            <option value="" selected> Select Section</option>
                                             <?php
                                             foreach($statements as $statement) { if (!ctype_alpha($statement[0])){ ?>
                                             <option value="<?php echo $statement[0] ?>"><?php echo $statement[0]; }?></option>
                                             <?php
                                             } ?>
</select> 
                                        </div>
                                    </div>
                                      <button type="submit" name="generate" class="btn btn-success btn-block">Generate</button>
                                </form>
                                <button style=" margin-top: 10px;" class="btn btn-danger btn-block" data-target="#mymodel"  data-toggle="modal"> Create Class</button>
                                                 
                                  <div>
                                      <form style="float: right;" action = "" method = "POST">
    <button class="Logout" type="submit" name = "logout">logout</button>
                                </form>
                                <form style="float: left;" action = "" method = "POST">
    <button class="Logout" type="submit" name = "back">back</button>
                                </form>
                            </div>
                            </article>
                        </section>
                    </div>
        
                     <div class="modal" id="mymodel"> 
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" style=" background-color: #333; font-family: 'Josefin Sans', sans-serif;">
                  <b><h3 style="color: #fff;" class="text-center">ENTER THE CLASS NAME</h3></b><br>
                    <button style="color:white" type="button" class="close" data-dismiss="modal">&times;</button></div>
                    <div class="modal-body" style="background-color: #63a4ff;
background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);">
                      <form action="" method="POST">
                                                            <div class="form-group">
                                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
                        <input type="text" class="form-control" name="class" placeholder="Enter Class Name">
                    </div>
                </div>
                 <button style="margin-left: 45%;" type="submit" name="enter" class="btn btn-danger">ENTER</button>
                      </form>
                      
                    </div>
                  </div>
                </div>
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
.Logout{
        background-color: #2c3e50; 
        border: none;
        color: white;
        padding: 5px 35px;
        text-align: left;
        text-decoration: none;
        display: inline-block;
        font-size: 10px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; 
        transition-duration: 0.4s;    
        border-radius: 10em;  
}
.Logout:hover {
    box-shadow: 0 12px 16px 0 rgba(248, 245, 245, 0.24),0 17px 50px 0 rgba(245, 245, 243, 0.19);
}
</style>
</body>
</html>
