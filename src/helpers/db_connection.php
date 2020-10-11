<?php

require_once(APP_PATH . '/config/db.php');

if (!isset($db)) {
	$db = new mysqli(
		$config_db['host'], 
		$config_db['username'],
		$config_db['password'],
		$config_db['database']
	);	
}

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}