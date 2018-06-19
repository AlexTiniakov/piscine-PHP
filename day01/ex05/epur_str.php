#!/usr/bin/php
<?php
if ($argc == 2) {
	$mas = array_filter(explode(" ", $argv[1]));
	$str = "";
	foreach ($mas as $i) {
		$str .= $i." ";
	}
	echo trim($str)."\n";
}
?>