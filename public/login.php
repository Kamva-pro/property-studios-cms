<?php
session_start();
require_once __DIR__ . '/../config/db-config.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin_username = $_ENV["DB_USER"];  
    $admin_password = $_ENV["DB_PASS"];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION["admin_logged_in"] = true;
        $_SESSION["admin_username"] = $username;
        header("Location: admin.php"); 
        exit;
    } else {
        echo "Invalid admin credentials.";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h1>Login to the access the Admin Panel</h1>
    <form action="login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required placeholder="Admin"><br><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="password" required><br><br>

        <button type="submit">Login</button><br>
        <a href="/crud-app/public/">Home</a>
        </form>
</body>
</html>
