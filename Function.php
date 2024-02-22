<?php

function sayHello(){
    echo "Hello World";
}

function parameter($name){
    echo "Hello $name";
}

function defaultParameter($name = "Guest"){
    echo "Hello $name";
}

function sum(int $a, int $b){
    return $a + $b;
}

function returnValue(int $a, int $b):int{
    return $a + $b;
}

function callback(callable $callback){
    $callback();
}

$firstname = "Kelvin";
$lastname = "Surya";

$name = fn() => "Hello $firstname $lastname";

function calback(string $name,callable $callback){
    $finalname = call_user_func($callback,$name);
    echo $finalname. PHP_EOL;
}

function factorialRecursive(int $number){
    if($number === 1){
        return 1;
    }
    return $number * factorialRecursive($number - 1);
}


sayHello();
echo PHP_EOL;
parameter("MuhKelvin");
echo PHP_EOL;
defaultParameter();
echo PHP_EOL;
echo sum(1,2);
echo PHP_EOL;
echo returnValue(1,2);
echo PHP_EOL;
callback(function(){
    echo "Hello World";
});
echo PHP_EOL;
calback("Kelvin","strtolower");
echo PHP_EOL;
echo factorialRecursive(5);
