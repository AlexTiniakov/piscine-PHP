<?php

function auth($login, $passwd) {
	if (!$login || !$passwd)
		return false;
	else {
		$str = file_get_contents('../private/passwd');
		$data = unserialize($str);
		if ($data) {
			foreach ($data as $key => $value) {
				if ($value['login'] === $login && $value['passwd'] === hash('whirlpool', $passwd))
					return true;
			}
		}
		else
			return false;
	}
}
?>