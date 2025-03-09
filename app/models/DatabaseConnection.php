<?php
namespace app\models;

class DatabaseConnection {
    private $connection;

    public function __construct() {
        try {
            $host = DB_HOST;
            $user = DB_USER;
            $password = DB_PASS;
            $db_name = DB_NAME;

            $this->connection = new \mysqli($host, $user, $password, $db_name);

            if ($this->connection->connect_error) {
                die("Connection error: " . $this->connection->connect_error);
            }
        } catch (\Exception $error) {
            die("Unexpected error: " . $error->getMessage());
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>