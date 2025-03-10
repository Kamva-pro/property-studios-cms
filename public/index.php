<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php'; 
require_once __DIR__ . '/../config/db-config.php';

use app\controllers\AuthController;
use app\controllers\DataController; 
use app\models\DatabaseConnection;

session_start();

$db = (new DatabaseConnection())->getConnection();
$controller = new DataController($db);
$authController = new AuthController();

$scriptDir = dirname($_SERVER['SCRIPT_NAME']);
$basePath = rtrim(str_replace('public', '', $scriptDir), '/'); 
define('BASE_PATH', $basePath);

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
    case '/login':
        $authController->login();
        break;
    case '/logout':
        $authController->logout();
        break;
    case '/admin':
        $controller->admin();
        break;
    default:
        http_response_code(404);
        echo '404 - Page not found';
        break;
}
?>