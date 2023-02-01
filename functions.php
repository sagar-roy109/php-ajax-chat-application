<?php

function user_login(){
  if(isset($_SESSION['user_name'])){
    return true;
  }else{
    return false;
  }
}