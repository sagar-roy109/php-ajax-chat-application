<?php 
require_once 'db.php';

if(isset($_POST['register'])){
  

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);


  $db = new DB;
  $get_emails = $db->connect->query("SELECT * FROM users WHERE email = '$email'");
  
  if($get_emails->num_rows > 0){
    echo "You are already registered please login";

    die();
  }else{

    $register_user = $db->connect->query("INSERT INTO users (email, first_name, last_name, password) VALUES ('$email', '$first_name', '$last_name','$password') ");
    
    if($register_user){
      echo "Registration Successfull Please login";

      die();
    }
   
  }
  
}



