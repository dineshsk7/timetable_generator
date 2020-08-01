<?php 
  require_once('../model/database.php');
$s_id = $_POST['id'];
$s_name = $_POST['name'];
$s_section = $_POST['section'];
$s_subject = $_POST['subject'];
$s_periods = $_POST['periods'];
global $db;
      $sql = "SHOW TABLES";
      $statements = $db->prepare($sql);
      $statements->execute();
      $count=0;
      foreach($statements as $class) {
        if (!ctype_alpha($class[0]) && $class[0] == $s_section){
                          $count+=1;
                          }   
        }
        if($count == 0){
           try{
    $query1="CREATE TABLE $s_section(day_order int(10) primary key,h1 varchar(30) NOT NULL,h2 varchar(30) NOT NULL,h3 varchar(30) NOT NULL,h4 varchar(30) NOT NULL,h5 varchar(30) NOT NULL,h6 varchar(30) NOT NULL,h7 varchar(30) NOT NULL)";
    $db->exec($query1);
    $in="INSERT INTO $s_section(day_order,h1,h2,h3,h4,h5,h6,h7) values(?,?,?,?,?,?,?,?)";
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
        }
        else{
                  $query = "Select * from $s_name";
                  $names=$db->query($query);
                  $result = $names->fetchAll();
                  print_r($result);

        }
/*    require_once('../model/database.php');
        $query = 'SELECT s_name FROM staff WHERE s_name=:s_name';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $s_name);
        $statement->execute();
        
        if($statement->rowCount() >= 1)
        {
        $query = 'SELECT s_id,s_name FROM staff WHERE s_name = :s_name and s_id = :s_id ';
        $statement = $db->prepare($query);
        $statement->bindValue(':s_name', $s_name);
        $statement->bindValue(':s_id', $s_id);
        $statement->execute();
        
            if($statement->rowCount() >= 1){
                try{
                    $query = "INSERT INTO staff(s_id,s_name,s_subject,s_section,s_periods) VALUES(?,?,?,?,?)";
                    $stmt1= $db->prepare($query);
                    $stmt1->execute([$s_id,$s_name,$s_subject,$s_section,$s_periods]);
                    header('Location: ../error/message.php');
                    }


                catch (PDOException $ex){
                    $error_message = $ex->getMessage();
                    echo "<script>alert('$error_message')</script>";
                    } 
          
            }
            else{

            echo " staff name and staff id should be unique ";        
                }
        }
      else{
            try{
                 $query = "INSERT INTO staff(s_id,s_name,s_subject,s_section,s_periods) VALUES(?,?,?,?,?)";
                 $stmt1= $db->prepare($query);
                 $stmt1->execute([$s_id,$s_name,$s_subject,$s_section,$s_periods]);
                 header('Location: ../error/message.php');
              }           


            catch (PDOException $ex){
                $error_message = $ex->getMessage();
                echo "<script>alert('$error_message')</script>";
    
              } 
          }
  */

    ?>