#!/usr/bin/php
<?php

function ft_is_sort($str1, $str2) {
	$str1 = strtolower($str1);
	$str2 = strtolower($str2);
	$len1 = strlen($str1);
	$len2 = strlen($str2);
	$check = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
	$len = $len1 > $len2 ? $len2 : $len1;
	for ($i = 0; $i < $len; $i++) { 
		$a = $str1[$i];
		$b = $str2[$i];
		$a1 = array_search($a, $check);
		$b1 = array_search($b, $check);
		$a1 = $a1 === false ? ord($a) + 95 : $a1;
		$b1 = $b1 === false ? ord($b) + 95 : $b1;
		if ($a1 > $b1)
			return false;
		if ($a1 < $b1)
			return true;
	}
	return $len1 > $len2 ? false : true;
}

$str = "";
unset($argv[0]);
foreach ($argv as $v) {
	$str .= $v." ";
}
$mas = array_filter(explode(" ", $str));
for ($i = 0; $i < count($mas) - 1;) { 
	if (ft_is_sort($mas[$i], $mas[$i + 1]))
		$i++;
	else {
		$tmp = $mas[$i];
		$mas[$i] = $mas[$i + 1];
		$mas[$i + 1] = $tmp;
		$i = 0;
	}
}
foreach ($mas as $v) {
	echo $v."\n";
}
?>