<?php
namespace app\controllers;

require_once __DIR__ . '/../../config/db-config.php';

class AuthController {
    public function login() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            $admin_username = DB_USER; 
            $admin_password = DB_PASS; 

            
            if ($username === $admin_username && $password === $admin_password) {
                $_SESSION["admin_logged_in"] = true;
                $_SESSION["admin_username"] = $username;
             
                header("Location: /crud-app/public/admin"); 
                exit;
            } else {
                echo "Invalid admin credentials.";
            }
        }
        require __DIR__ . '/../views/login.php';
    }

    public function logout() {
        session_destroy();
        header('Location: /crud-app/public/');
        exit;
    }
}
?>