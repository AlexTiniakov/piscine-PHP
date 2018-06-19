#!/usr/bin/php
<?php
$fd = fopen('php://stdin','r');
while ($fd && !feof($fd)) {
	echo "Enter a number: ";
	$nbr = fgets($fd);
	if ($nbr) {
		$nbr = str_replace("\n", "", "$nbr");
		if (is_numeric($nbr)) {
			if ($nbr % 2 == 0)
				echo "The number ".$nbr." is even\n";
			else
				echo "The number ".$nbr." is odd\n";
		}
		else
			echo "'".$nbr."' is not a number\n";
	}
}
fclose($fd);
echo "\n";
?>