<?php

$numbers = array(
    array(10, 100, 101),
    array(120, 130, 140),
    array(150, 90, 80)
);
// print_r($numbers);
echo "<pre>";
$sum = 0;
$sum1 = 0;
foreach($numbers as $number){
    print_r($number);
    foreach($number as $value){
        $sum += $value;
    }
    echo "$sum <br>";
    $sum1 = $sum1 + $sum;
    $sum = 0;
}
echo $sum1;
echo "</pre>";
?>