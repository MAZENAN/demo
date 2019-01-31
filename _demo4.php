<?php
$ros = file_get_contents('demo.jpg');
$url = base64_encode($ros);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<img src="data:image/jpeg;base64,<?php echo $url; ?>">
	<img src="data:image/jpeg;base64,<?php echo $url; ?>">
	<img src="demo.jpg">
	<img src="demo.jpg">
</body>
</html>