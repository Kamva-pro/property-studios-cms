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
        <div>Contact Management System</div>
        <ul>
            <li><a href="/crud-app/public/" <?php echo $currentPage === 'home' ? 'class="active"' : ''; ?>>Home</a></li>
            <?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']): ?>
                <li><a href="/crud-app/public/logout">Logout</a></li>
                <li>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></li>
            <?php else: ?>
                <li><a href="/crud-app/public/login" <?php echo $currentPage === 'login' ? 'class="active"' : ''; ?>>Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</body>
</html>