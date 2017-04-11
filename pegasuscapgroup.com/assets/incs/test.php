<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	$host = $_SERVER[HTTP_HOST];
	$page = $_SERVER[REQUEST_URI];

    if ((strstr($_SERVER[HTTP_HOST], 'pegasusmgmt.com')) OR (!strstr($_SERVER[HTTP_HOST], 'www'))) {

    	if (trim($page != "")) {
    		$url = 'http://www.pegasuscapgroup.com'."$page";
    	} else {
    		$url = 'http://www.pegasuscapgroup.com/';
    	}

    	header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: $url");
    }

?>