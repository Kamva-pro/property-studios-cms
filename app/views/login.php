<?php
$currentPage = 'login'; 
include __DIR__ . "/components/navbar.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h1>Login to the access the Admin Panel</h1>
    <form action="crud-app/public/login" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required placeholder="Admin"><br><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="password" required><br><br>

        <button type="submit">Login</button><br>
        </form>
</body>
</html>
