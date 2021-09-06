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


// new Updating
/*
  $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 6.50;

    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        echo $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        echo $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        echo $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
*/
