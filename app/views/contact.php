<?php
$currentPage = 'contact';
include __DIR__ . '/components/navbar.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Data</title>
</head>
<body>
    <h2>Tell us what you think</h2>
    <form action="<?php echo BASE_PATH; ?>/submit" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea type="text" id="message" name="message" required></textarea><br>

        <button type="submit">Submit</button>
     
    </form>
</body>
</html>
