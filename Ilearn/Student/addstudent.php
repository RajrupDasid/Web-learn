<?php 
    include_once('../dbConnection.php');
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