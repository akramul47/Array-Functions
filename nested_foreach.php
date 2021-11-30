<pre>
<?php

$cars = array(
    array(
        "name" => "volvo",
        "stock" => 22,
        "sold" => 18
    ),
    array(
        "name" => "BMW",
        "stock" => 20,
        "sold" => 18
    ),
    array(
        "name" => "Land Rover",
        "stock" => 40,
        "sold" => 30
    )
    );

    // print_r($cars);

    foreach($cars as $car){
        foreach($car as $key => $value){
            echo "$key => $value <br>   ";
        }
    }

    ?>
    </pre>
