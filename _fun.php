<?php
$x = 10;
$y = 20;
$f = function () {
	echo $x;
};
// $f();

function name($fun) {
	$fun();
};
name(function () use (&$x, &$y) {$x = 20; $y = 100;echo $x . $y;});
echo $x . $y;