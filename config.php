<?php

define('DB_HOST',"localhost");
define('DB_USER',"admin");
define('DB_PASS',"phuctheempire");
define('DB_NAME',"Project"); // Change this to your database name 


define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME'])); // For routing, don't change this
define('URLROOT','http://project.fr/'); // Change this to your domain name
define('SITENAME','Project'); // Change this to your site name

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);