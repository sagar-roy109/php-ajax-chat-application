<?php

session_start();
require_once 'db.php';

if(isset($_POST['login'])){

  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $db = new DB;
  $get_email = $db->connect->query("SELECT * FROM users WHERE email = '$email'");
  

  if($get_email->num_rows > 0){
    $user_data = $get_email->fetch_object();
    $user_password = $user_data->password;
    if($password == $user_password ){
      
      $_SESSION['user_name'] = $user_data->first_name;
      echo "login";
     
    }else{
      echo "Password or email not correct please try again";
    }
    
   
  }else{
    echo "Password or email not correct please try again";
  }
  
  
}



