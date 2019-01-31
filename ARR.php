<?php
$x = 10;
const SSS = 10;
echo SSS;
//print_r($GLOBALS);
print_r($_REQUEST);
print_r($_SERVER['SERVER_ADDR']);
print_r($_SERVER['SERVER_NAME']);
print_r($_SERVER['REQUEST_TIME']);
print_r($_SERVER['QUERY_STRING']);
print_r($_SERVER['REMOTE_ADDR']);

setcookie('name', 'aaa', time() + 200, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form>
		<input type="text" name="age">
		<input type="submit" value="提交">
	</form>
</body>
</html>