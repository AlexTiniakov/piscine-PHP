#!/usr/bin/php
<?php
	if ($argc != 2) {
		echo "Incorrect Parameters\n";
		exit();
	}
	$str = str_replace(" ", "", "$argv[1]");
	$nbr1 = intval($str);
	$chr = $str[strlen((string)$nbr1)];
	$nbr2 = intval(substr($str, strlen((string)$nbr1) + 1));
	switch ($chr) {
		case ('*'):
			echo $nbr1 * $nbr2;
			break;
		case ('+'):
			echo $nbr1 + $nbr2;
			break;
		case ('-'):
			echo $nbr1 - $nbr2;
			break;
		case ('/'):
			echo $nbr1 / $nbr2;
			break;
		case ('%'):
			echo $nbr1 % $nbr2;
			break;
		default:
			echo "Syntax Error";
			break;
	}
	echo "\n";
?>