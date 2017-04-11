<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	if (($_GET["id"] == "Pegasus")  AND ($_GET["pw"] == "Capital")) {
		//$value = get_browser(null, true);
		//$value = md5($value);
		$value = "sdfnomore";
		setcookie("admin", $value);
		echo "OK";
	} else {
		echo "NOT OK  $_GET[name] ";
	}

?>