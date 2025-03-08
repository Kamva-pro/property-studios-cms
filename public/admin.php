<?php
session_start();
if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: admin-login.php");
    exit;
}
?>
<h1>Welcome, Admin!</h1>
<a href="logout.php">Logout</a>
