<?php 
session_start();
require_once 'db.php';

if(isset($_POST['chat'])){
   
  $message = $_POST['message'];
  $email = $_SESSION['email'];
 
  $db = new DB;
  if($message != null){
    $chat = $db->connect->query("INSERT INTO chats (user_email, message) VALUES ('$email', '$message') ");
  
  if($chat){
    echo "Sent";
  }
  }
  
  
}

if(isset($_POST['update_chat'])){
  $db = new DB;
  $chat = $db->connect->query("SELECT * FROM chats ");

  while($msg = $chat->fetch_object() ) : ?>

    <p style="color: #ff2bff;"><?php echo $msg->user_email; ?></p>
    <p class="msg" id="msg-0">
    <?php echo $msg->message; ?>
    </p>
    <?php
      endwhile;
      die();
    
}



