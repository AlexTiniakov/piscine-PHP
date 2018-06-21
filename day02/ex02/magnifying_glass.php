#!/usr/bin/php
<?php
	function f_2($matches) {
		return ($matches[1]. strtoupper($matches[2]).$matches[3]);
	}

	function f_1($matches) {
		$matches[0] = preg_replace_callback("/( title=\")(.*?)(\")/", "f_2", $matches[0]);
		$matches[0] = preg_replace_callback("/(>)(.*?)(<)/", "f_2", $matches[0]);
		return ($matches[0]);
	}

	if ($argc < 2 || !file_exists($argv[1]))
		exit();
	$fd = fopen($argv[1], 'r');
	$text = "";
	while ($fd && !feof($fd))
		$text .= fgets($fd);
	echo preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/", "f_1", $text);
?>