<?php 

$Path = 'www.example.com/public_html/index.php';

$N_file = substr(strrchr($Path,'/'),1); 
// strrchr => stop at the last '/' and remove everything before it 
// substr  => will find '/index.php' and '1' mean shift one step 
echo $N_file;

?>