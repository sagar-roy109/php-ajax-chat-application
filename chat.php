<?php 

session_start();

require_once 'functions.php';
if (!user_login()){
  header('location: index.php');
  die();
}


?>