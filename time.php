<?php
// var_dump(microtime());
// echo '<br>';
// var_dump(microtime(true));
// echo '<br>';
// var_dump(time());
// $x = 10.8;
// echo (int) ($x + 0.5);
// echo date('Y-m-d H:i:s', 2 ** 33);
// date_default_timezone_set('PRC');
// echo date_default_timezone_get();
echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";
echo date('Y-m-d H:i:s', strtotime("2019-10-20 20:03:10"));