<?php

function clean($input){
  
    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);
     return $input;
}

$errorMessages = [];


$name = clean($_REQUEST['name']);
$email= clean($_POST['email']);
$password= clean($_POST['password']);
$Address= clean($_POST['Address']);
$Linkedin= clean($_POST['Linkedin']);
$Gender= clean($_POST['Gender']);






if (is_string($name)){
    echo("<br>name => $name => is a string  <br>");
} else {
  echo("<br>name => $name => is not a string <br>");
}


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("<br>email => $email => is a valid email address <br>");
  } else {
    echo("<br>email => $email => is not a valid email address <br>");
  }




if (filter_var($Linkedin, FILTER_VALIDATE_URL)) {
    echo("<br>Linkedin => $Linkedin => is a valid URL <br>");
  } else {
    echo("<br>Linkedin => $Linkedin => is not a valid URL <br>");
  }




if (strlen($password) < 6 ){
    $errorMessages['Password'] = "Length Must be 6 or more char <br>";
} else{

echo "<br>password =>".$password.' (Valid) <br>';
}

if (strlen($Address) < 10 ){
    $errorMessages['Address'] = "Length Must be 10 or more char <br>";
}
else{
echo "<br>Address =>".$Address .' (Valid)<br>';
}

if(count($errorMessages) > 0){
    // ERROR MESSAGES

   foreach($errorMessages as $key => $value){

       echo $key.' => '.$value.'<br>';
   }


}
else{

     echo '<br> Valid Data';

}


?>