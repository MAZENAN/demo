<?php

function get_code($id, $year, $phase) {
	echo md5($id . $year . $phase), "\n";
	echo $id . $year . $phase, "\n";
}

get_code(2, 2012, 1);
get_code(2, 2012, 1);
get_code(3, 2012, 1);
get_code(2, 2012, 2);