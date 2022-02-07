<?php

//Reason to use: performance against tradicional array

$fixed = new\SplFixedArray(3);

$fixed[0] = "laranja";
$fixed[1] = "banana";
$fixed[2] = "maca";

//Error to learn example

//$fixed[5] = "uva";

//Solution

$fixed->setSize(5);
$fixed[4] = "uva";

foreach($fixed as $key => $value){
    
    echo "$key : $value\n";
}



