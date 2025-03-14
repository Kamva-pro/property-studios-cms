<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Dotenv\Dotenv;

/*
search for the dotenv file inside the root directory of the project
create an immutable instance of the dotenv environment 
*/
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

define('DB_HOST', $_ENV['DB_HOST']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASS', $_ENV['DB_PASS']);
define('DB_NAME', $_ENV['DB_NAME']);

          




