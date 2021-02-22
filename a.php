<?php


$array = [
	['a' => 1],['b' => 2]
];
foreach($array as &$tmp){
	$tmp['a'] = '3';
}

print_r($array);
?>