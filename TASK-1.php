<?php

$First_cost=3.50;
$second_cost=4.00;
$third_cost=6.50;
$units= 190; // assume units 

if ($units <= 50){

    echo " the bill = ". $bill = $units * 3.50; 
}
elseif($units > 50 && $units >= 100){

    echo " the bill = ". $bill = $units * 4.00;
}

else{
    echo  "the bill = ". $bill = $units * 6.50;
}
// output will be  "the bill = 760" in third COST

?>
