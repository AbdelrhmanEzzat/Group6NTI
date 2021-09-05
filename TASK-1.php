<?php

$First_cost=3.50;
$second_cost=4.00;
$third_cost=6.50;
$units= 190;

if ($units <= 50){

    echo $bill = $units * 3.50; 
}
elseif($units > 50 && $units >= 100){

    echo $bill = $units * 4.00;
}

else{
    echo $bill = $units * 6.50;
}


?>