#!/usr/bin/php
<?php
	if ($argc != 4) {
		echo "Incorrect Parameters\n";
		exit();
	}
	$i = 0;
	while (++$i < 4) {
		$argv[$i] = str_replace(" ", "", "$argv[$i]");
		$argv[$i] = str_replace("\t", "", "$argv[$i]");
	}
	switch ($argv[2]) {
		case ("*"):
			echo $argv[1] * $argv[3];
			break;
		case ("+"):
			echo $argv[1] + $argv[3];
			break;
		case ("-"):
			echo $argv[1] - $argv[3];
			break;
		case ("/"):
			echo $argv[1] / $argv[3];
			break;
		case ("%"):
			echo $argv[1] % $argv[3];
			break;
	}
	echo "\n";
?>