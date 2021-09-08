<?php  
session_start();

 echo 'Name  : ' . $_SESSION['REG']['name'].'<br>';
 echo 'EMAIL : ' . $_SESSION['REG']['email'].'<br>';
 echo 'Password : ' . $_SESSION['REG']['password'].'<br>';
 echo 'address : ' . $_SESSION['REG']['address'].'<br>';
 echo 'gender : ' . $_SESSION['REG']['gender'].'<br>';
 echo 'linkedin : ' . $_SESSION['REG']['linkedin'].'<br>';
 $image = $_SESSION["REG"]["image"];
echo "image  <a href='./uploads/$image'>image</a>";

?>