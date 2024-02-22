<?php

$names = ["Kiriyama","Souya","Abu","lahab"];

foreach ($names as $name){
    echo $name.PHP_EOL;
}

$person = [
    "name" => "Kiriyama",
    "age" => 18,
    "gender" => "PRIA"
];

foreach ($person as $key => $value){
    echo "$key : $value".PHP_EOL;
}