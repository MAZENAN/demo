<?php
$str = 'aa.txt';
$ext = substr($str, (strrpos($str, '.') + 1));
echo $ext;
echo strstr($str, '.');
echo strrchr($str, '.');