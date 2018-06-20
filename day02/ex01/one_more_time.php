#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/Paris');
	if ($argc < 2)
		exit();
	$ft_month = array("janvier", "février", "mars", "avril", "mai", "juin", "juilett", "août", "septembre", "octobre", "novembre",  "décembre");
	$ft_day = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
	list($day, $day_nbr, $month, $year, $time) = explode(" ", $argv[1]);
	if (($month1 = array_search(lcfirst($month), $ft_month)) === false ||
		($day1 = array_search(lcfirst($day), $ft_day)) === false ||
		preg_match("/^[1-9]$|0[1-9]|[1-2][0-9]|3[0-1]$/", $day_nbr) === 0 ||
		preg_match("/^[0-9]{4}$/", $year) === 0 ||
		preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $time) === 0) {
		echo "Wrong Format\n";
		exit();
	}
	$month1++;
	list($hour, $minute, $second) = explode(":", $time);
	$time1 = mktime($hour, $minute, $second, $month1, $day_nbr, $year);
	if (date("N", $time1) == $day1 + 1)
		echo $time1."\n";
	else
		echo "Wrong Format\n";
?>