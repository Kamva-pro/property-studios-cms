<?php
namespace app\controllers;

use app\models\DataModel;

class DataController {
    private $model;

    public function __construct($db) {
        $this->model = new DataModel($db);
    }

    public function admin() {
        if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
            header("Location:" . BASE_PATH . "/login");
            exit;
        }

        $submissions = $this->model->fetchSubmissions();

        require __DIR__ . "/../views/admin.php";
    }


    public function index() {
        require __DIR__ . '/../views/contact.php';
    }

    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo "Invalid email format";
                die;
            }
            if ($this->model->saveSubmission($name, $email, $message)) {
                header('Location: ' . BASE_PATH . '/success');
                exit;
            } else {
                echo "Error: Unable to save submission.";
            }
        }
    }

    public function success() {
        require __DIR__ . '/../views/success.php';
    }
}