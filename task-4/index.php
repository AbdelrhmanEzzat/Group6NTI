<?php 
 $value = "this is a Test Cookie for first time for 24h";
 $data = "name : abdo <br> email : abdoezzat222@gmail.com";

 
 setcookie('Message',$data,time()+120,'/');

  echo  $_COOKIE['Message'];

?>