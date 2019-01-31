<?php
$str = 'app\form2.php\index@index';
echo substr(strrchr($str, '\\'), 1);