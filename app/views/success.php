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
<h1 style="text-align: center;">Thank you for submitting the form</h4>
<h2 style="text-align: center;">We shall be in touch with you soon.</h6>
<script>
     setTimeout(function() {
        window.location.href = "<?php echo BASE_PATH; ?>/"; 
    }, 3500); 
</script>
</body>
</html>
