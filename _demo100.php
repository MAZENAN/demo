<?php
$arr = [
	['year' => 2019, 'phase' => 1],
	['year' => 2019, 'phase' => 2],
	['year' => 2019, 'phase' => 3],
	['year' => 2019, 'phase' => 4],
	['year' => 2019, 'phase' => 5],
	['year' => 2019, 'phase' => 6],
	['year' => 2019, 'phase' => 7],
	['year' => 2018, 'phase' => 1],
	['year' => 2018, 'phase' => 2],
	['year' => 2018, 'phase' => 3],
];

$newArr = []; //[
//     '2019'=>[
//         ['phase'>1,'original'=>'ll'],
//         ['phase'>2,'original'=>'ll']
//     ],
//     '2018'=>[
//         ['phase'>1,'original'=>'ll'],
//         ['phase'>2,'original'=>'ll'],
//         ['phase'>3,'original'=>'ll']
//     ]
// ]

foreach ($arr as $v) {
	$newArr[$v['year']][] = $v;
}

print_r($newArr);