<?php 

define('HOST','localhost');
define('DB','php_chat');
define('USER','root');
define('PASSWORD','');


class DB{

 public $connect;
 function __construct()
 {
  $this->connect = mysqli_connect(HOST, USER, PASSWORD, DB);
 }

}