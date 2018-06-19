<?php
function ft_is_sort($tab) {
	$mas = $tab;
	sort($tab);
	return array_diff_assoc($mas, $tab) ? false : true;
}
?>