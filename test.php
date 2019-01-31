<?php
// $str = 'sss ddssd 22';
// echo trim($str, 'sd');
// echo htmlspecialchars('<b>');
// echo date('Y-m-d H:i:s', strtotime('1982年10月12日 08:08:00'));
// $arr = [3];
// $arr[-1] = 1;
// $arr[-2] = 2;
// $arr[-1.4] = 4;
// $arr[] = 10;
// $arr['b'] = 'fg';
// $arr[5] = 11;
// $arr[] = 20;
// $arr['a'] = 'f';
// print_r($arr);
// foreach ($arr as $key => $value) {
// 	echo 'key:' . $key . '  value:' . $value;
// }
// echo "\n";
// echo count(null), "\n";
// $arr1 = [1, 2, 3, 4, [5, 6]];
// echo count($arr1, 1);
// echo "\n";
// echo count(''), "\n";
// echo implode('-', [1, 2, 3]);
// $str = 'a b c def';
// $arr2 = explode(' ', $str);
// $arr3 = explode(' ', $str, 10);
// $arr4 = explode('', $str, -1);
// print_r($arr2);
// print_r($arr3);
// var_dump($arr4);
$sort = ['a' => 1, 'b' => 2, 'b', 'c', 'a', [12, 3], [1, 2]];
asort($sort);
print_r($sort);
print_r(array_reverse($sort, true));
//
//
$arr6 = [2 => 1, 3 => 2, 'a' => 3, 'b' => 4, 6 => 6];
print_r($arr6);
// array_unshift($arr6, 0);
// print_r($arr6);
array_push($arr6, 7);
print_r($arr6);
$arr10 = [1, 2, '北京' => 3, 4, 5, 6, 7];

echo join($arr10), '<br>';