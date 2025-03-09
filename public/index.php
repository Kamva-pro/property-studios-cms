<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php'; 
require_once __DIR__ . '/../config/db-config.php';

use app\controllers\DataController; 

if (!class_exists('app\controllers\DataController')) {
    echo 'DataController class does NOT exist!';
    die;
} 
 

session_start();

$db = (new DatabaseConnection())->getConnection();
$controller = new DataController($db);

$basePath = '/crud-app/public';

$request = str_replace($basePath, '', $_SERVER['REQUEST_URI']);

switch ($request) {
    case '/':
        $controller->index();
        break;
    case '/submit':
        $controller->submit();
        break;
    case '/success':
        $controller->success();
        break;
    default:
        http_response_code(404);
        echo '404 - Page not found';
        break;
}
?>