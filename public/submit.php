<?php
require_once __DIR__ . '/../config/db-config.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $db = new DatabaseConnection();

    $sql = "INSERT INTO user_submissions(name, email, message, submitted_at) VALUES (?, ?, ?, NOW())";

    if ($prepared_statement = $db->getConnection()->prepare($sql)) {
        $prepared_statement->bind_param("sss", $name, $email, $message);
        if ($prepared_statement->execute()) {
            if ($prepared_statement->affected_rows > 0) {
                $prepared_statement->close();
                header('Location: success.php');
                exit;
            } else {
                echo "Error: No rows affected.";
            }
        } else {
            echo "Error executing query.";
        }
    } else {
        echo "Error preparing statement.";
    }


    exit;
}
