<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Dotenv\Dotenv;

class DatabaseConnection
{
    private $connection;

    public function __construct()
    {
        try {
            /*
            search for the dotenv file inside the root directory of the project
            create an immutable instance of the dotenv environment 
            */
            $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
            $dotenv->load();

            // retreive hostname, username, password, databasename

            $host = $_ENV["DB_HOST"];
            $user = $_ENV["DB_USER"];
            $password = $_ENV["DB_PASS"];
            $db_name = $_ENV["DB_NAME"];

            $this->connection = new mysqli($host, $user, $password, $db_name);

            if ($this->connection->connect_error)
            {
                die("Connection error: " . $this->connection->connect_error);
            }

        } catch (Exception $error) {
            die("Unexpected error: " . $error);
        }

    }

    public function getConnection()
    {
        return $this->connection;
    }

}

