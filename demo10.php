<?php
function change($str) {
	if (is_string($str)) {

		$str = ucwords($str);

		return str_replace('_', '', $str);
	}
	return;
}

echo change('my_name_is');