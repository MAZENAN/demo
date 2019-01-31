<?php
function test() {
	for ($i = 0; $i < 10; $i++) {
		if ($i == 5) {
			echo $i;
			return;
		}
		echo "--" . $i . '<br>';
	}
}
// test();

function getResult($num) {
	$sum = 0;
	for ($i = 0; $i <= $num; $i++) {
		$sum += $i;
	}
	return $sum;
}

function getResult1($num) {
	if ($num == 1) {
		return 1;
	}
	return $num + getResult1($num - 1);
}

// echo getResult(4);
echo getResult1(9);