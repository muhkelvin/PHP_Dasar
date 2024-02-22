<?php

$data = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

var_dump(array_keys($data));
var_dump(array_values($data));
rsort($data); // Mengurutkan array terbalik
sort($data);  //Mengurutkan array
shuffle($data); //Mengacak array
