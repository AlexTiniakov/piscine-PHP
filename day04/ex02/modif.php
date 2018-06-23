<?php
	if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] === "OK") {
		$str = file_get_contents('../private/passwd');
		$data = unserialize($str);
		if ($data) {
			$i = 0;
			foreach ($data as $key => $value) {
				if ($value['login'] === $_POST['login'] && $value['passwd'] === hash('whirlpool', $_POST['oldpw'])) {
					$data[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
					$i = 1;
				}
			}
			if ($i == 1) {
				file_put_contents('../private/passwd', serialize($data));
				echo "OK\n";
			}
			else
				echo "ERROR\n";
		}
	}
	else
		echo "ERROR\n";
?>