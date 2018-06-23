<?php
	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === "OK") {
		if (!file_exists('../private'))
			mkdir('../private');
		if (!file_exists('../private/passwd'))
			file_put_contents('../private/passwd', "");
		$str = file_get_contents('../private/passwd');
		$data = unserialize($str);
		$i = 0;
		if ($data) {
			foreach ($data as $key => $value) {
				if ($value['login'] === $_POST['login'])
					$i = 1;
			}
		}
		if ($i != 0)
			echo "ERROR\n";
		else {
			$tab['login'] = $_POST['login'];
			$tab['passwd'] = hash('whirlpool', $_POST['passwd']);
			$data[] = $tab;
			$str = serialize($data);
			file_put_contents('../private/passwd', $str);
			echo "OK\n";
		}
	}
	else
		echo "ERROR\n";
?>