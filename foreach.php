<?php

$students = ['stu1', 'stu2', 'stu3'];

// foreach($array as $value){

// }
echo "<ol>";

// foreach ($main_variaable_name as $new_variable_name){
//     body;
// }

foreach ($students as $student){
    echo "<li>" .$student. "</li>";
}
echo "</ol>";


$cars = ['Volvo', 'BMW', 'Toyota'];

foreach($cars as $car){
    echo "$car <br>";
}


$names = [
    'First_name' => 'John',
    'Last_name' => 'Doe',
    'Middle_name' => 'Bray',
];

//Without key
foreach($names as $name){
    echo "<li>" .$name. "<li>";

}

//With key
foreach($names as $key => $name){
    echo "<li>$key : $name <li>";

}

