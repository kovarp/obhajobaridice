<?php

require __DIR__ . '/../vendor/autoload.php';

define('DB_NAME', 'db');
define('DB_USER', 'user');
define('DB_PASSWORD', '123');
define('DB_HOST', 'mysql');

$db = new mysqli(
	DB_HOST,
	DB_USER,
	DB_PASSWORD,
	DB_NAME
);

$dump = new MySQLDump($db);
$dump->save(__DIR__ . '/create.sql');
