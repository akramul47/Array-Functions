<pre>

<?php

//Merging two or more arrays

$hatchbacks = array(
    "Suzuki" => "Baleno",
    "Skoda" => "Fabia",
    "Tata" => "Tiger"
);

$friends = array("X", "Y", "XYZ");

$merged = array_merge($hatchbacks, $friends);

echo "<pre>";
print_r($merged);
echo "</pre>";

//Accesing array keys and values

$hatchbacks_keys_array = [];
$hatchbacks_values_array = [];

foreach ($hatchbacks as $key => $hatchback){
    //echo $hatchback.<br>;

    $hatchbacks_keys_array[] = $key;
    $hatchbacks_values_array[] = $hatchback;
}

print_r($hatchbacks_keys_array);
print_r($hatchbacks_values_array);

//Easier way with built in functions

echo "<hr>";

print_r(array_keys($hatchbacks));
print_r(array_values($hatchbacks));

?>
</pre>