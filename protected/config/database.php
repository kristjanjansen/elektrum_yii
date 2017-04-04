<?php

$connection = 'mysql:host=localhost;dbname='.getenv('DB_DATABASE');
    
return array(
	'connectionString' => $connection,
	'emulatePrepare' => true,
	'username' => getenv('DB_USERNAME'),
	'password' => getenv('DB_PASSWORD'),
	'charset' => 'utf8',
);