<?php
namespace app\models;

class DataModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function saveSubmission($name, $email, $message) {
        $sql = "INSERT INTO user_submissions(name, email, message, submitted_at) VALUES (?, ?, ?, NOW())";
        $stmt = $this->db->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("sss", $name, $email, $message);
            if ($stmt->execute()) {
                return $stmt->affected_rows > 0;
            }
        }
        return false;
    }
}