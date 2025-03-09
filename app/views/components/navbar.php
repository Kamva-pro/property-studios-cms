<?php
$currentPage = $currentPage ?? 'home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/crud-app/public/assets/css/styles.css">
</head>
<body>
    <nav>
        <div id="inner-nav">

        <div id="navbrand">Contact Management System</div>
        <ul>
            <li><a href="/crud-app/" <?php echo $currentPage === 'home' ? 'class="active"' : ''; ?>>Home</a></li>
            <?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']): ?>
                <li><a href="/crud-app/admin" <?php echo $currentPage === 'admin' ? 'class="active"' : ''; ?>>Admin Panel</a></li>
                <li><a href="/crud-app/logout">Logout</a></li>
            <?php else: ?>
                <li><a href="/crud-app/login" <?php echo $currentPage === 'login' ? 'class="active"' : ''; ?>>Login</a></li>
            <?php endif; ?>
        </ul>
        </div>

    </nav>
</body>
</html>