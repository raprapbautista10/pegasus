<?php
        
	$host = 'sql5c38a.carrierzone.com';


    if (strstr($_SERVER['HTTP_HOST'], 'local')) {
        $host = 'localhost';
    }

	$db_user_name = "pegasusmgm";
	$database = "phpmy1_pegasusmgmt_com";
	$db_password = "zz7tx401";

	if (! ($link = mysqli_connect($host, $db_user_name, $db_password,$database))) {
	    echo "Connection Error: ".mysqli_connect_error();
	    die("help!");
	}

	unset($db_user_name);
	unset($db_password);

?>