<?php
$currentPage = 'admin'; 
include __DIR__ . "/components/navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>public/assets/css/styles.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date Submitted</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($submissions as $submission): ?>
                <tr>
                    <td><?php echo htmlspecialchars($submission['name']); ?></td>
                    <td><?php echo htmlspecialchars($submission['email']); ?></td>
                    <td><?php echo htmlspecialchars($submission['message']); ?></td>
                    <td><?php
                        $date = new DateTime($submission['date_submitted']);
                        echo $date->format('F j, Y, g:i A');
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>