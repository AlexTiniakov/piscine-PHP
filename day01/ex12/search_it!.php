#!/usr/bin/php
<?php
	if ($argc < 3)
		exit();
	$src = $argv[1];
	unset($argv[0], $argv[1]);
	$arr = array_reverse($argv);
	foreach ($arr as $key) {
		$tab = explode(":", $key);
		if ($src === $tab[0]) {
			echo $tab[1]."\n";
			exit();
		}
	}
?>