<?php
function ft_split($str) {
	$mas = array_filter(explode(" ", $str));
	sort($mas);
	return $mas;
}
?>