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
            header('Location: /crud-app/public/login');
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

            if ($this->model->saveSubmission($name, $email, $message)) {
                header('Location: /crud-app/public/success');
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