<?php

//$value = array(1,2,3,4,5);
//var_dump($value);

$name = ["kiriyama","Souya","abu"];
var_dump($name);

// Operasi Array

var_dump($name[0]);
$name[0] = "Diubah";
var_dump($name);
unset($name[0]);
var_dump($name);
var_dump(count($name));

$person = [
  "Name" => "Kiriyama",
    "Age" => 20,
];

var_dump($person);


$person2  = [
    "id" => 1,
    "Name" => "Souya",
    "Age" => 20,
    "Adress" => [
     "City" => "Jakarta",
     "Country" => "Indonesia"
    ]
];

var_dump($person2);
