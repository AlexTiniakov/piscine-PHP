#!/usr/bin/php
<?php
$str = "";
unset($argv[0]);
foreach ($argv as $i) {
	$str .= $i." ";
}
$mas = array_filter(explode(" ", $str));
sort($mas);
foreach ($mas as $v) {
	echo $v."\n";
}
?>