<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

//3 constants provided
//1- APP_PATH os the application path to the 'app' directory
//2- FILES_PATH as the files path to the transactions files directory
//3- VIEWS_PATH which is the path to the views directory (this is the location for table info)

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR); // application path
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

/* YOUR CODE (Instructions in README.md) */
require APP_PATH . "App.php"; //requiring the code from App.php

$files = getTransactionFiles(); //getTransactionFiles is getting called here but is in App.php

var_dump($files);