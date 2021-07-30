<?php
    include_once('../dbConnection.php');
    //checking email already exist in database
    if(isset($_POST['checkemail']) && isset($_POST['email']) && isset($_POST['password'])){
        $password=md5($_POST['password']);
        $email=$_POST['email'];
        $sql="select * from student where email = '".pg_escape_string($_POST['email'])."' and password ='".$hashpassword."'";
        $data=pg_query($dbconn,$sql);
        $login_check=pg_num_rows($data);
        if($login_check>0){
                echo json_encode("Login Successfully");
        }else{
                echo json_encode("Invalid Details");
        }
    }

    //Inserting data from front end to server
    if(isset($_POST['signup']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
        $sql = "insert into student (name,email,password) values ('".$_POST['name']."','".$_POST['email']."','".md5($_POST['password'])."')";
      $ret = pg_query($dbconn, $sql);
      if($ret){
          
              echo json_encode("Data saved Successfully");
      }else{
          
              echo json_encode("Something Went Wrong");
      }
    }
?>