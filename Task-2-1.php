
<?php

// task-1
// Write a PHP function to print the next character of a specific character.

$char = 'z';
$next_char = ++$char;

if (strlen($next_char)>1){

    $next_char = $next_char[0]; // reset to defult after 'z'
}
echo $next_char;

?>
