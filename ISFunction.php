<?php

$data = "sample string";

var_dump(is_string($data));
var_dump(is_string($data) && strlen($data) > 0);
var_dump(is_bool($data));
var_dump(is_bool($data) && strlen($data) > 0);
var_dump(is_int($data));
var_dump(is_int($data) && strlen($data) > 0);
var_dump(is_float($data));
var_dump(is_float($data) && strlen($data) > 0);
