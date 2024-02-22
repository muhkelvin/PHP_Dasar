<?php

$name = "Kiriyama Souya";

function name(){
    global $name;
    echo $name;
}

name();
