#!/usr/bin/php
<?php
if ($argc > 1) {
	$mas = array_values(array_filter(explode(" ", $argv[1])));
	$str = "".$mas[0];
	unset($mas[0]);
	$str1 = "";
	foreach ($mas as $v) {
		$str1 .= $v." ";
	}
	echo $str1.$str."\n";
}
?>