<?php
$arr = [3 => 1, 1 => 9, 2 => 2];
print_r($arr);
ksort($arr);
print_r($arr);

function fun1($var) {
	echo 'fun1' . $var;
}

function fun2($var) {
	echo 'fun2' . $var;
}

function fun($f, $x) {
	$f($x);
}

fun('fun2', 20);