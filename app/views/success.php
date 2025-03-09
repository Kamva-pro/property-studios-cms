<?php
$currentPage = 'success';
include __DIR__ . '/components/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<p>Thank you for submitting the form</p>

<script>
     setTimeout(function() {
        window.location.href = "<?php echo BASE_PATH; ?>/"; 
    }, 3500); 
</script>
</body>
</html>