<?php

//If string is in the array

$fruits = array('orange', 'apple', 'mango');
echo in_array('orange', $fruits) ? 'Got orange' : 'Not in array';
echo "<br>";
echo in_array('banana', $fruits) ? 'Got banana' : 'Not in array';

echo "<pre>";
print_r($fruits);
echo "</pre>";