<?php
namespace CustomPage;
class DatabaseConnection {
    private static $instance = null;
    private $connection;

    
    private function __construct() {
        $this->connect();
    }

   
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

   
    private function connect() {
        try {
            $this->connection = new \PDO('sqlite:./db/database.db');
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Ошибка подключения: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    private function __clone() {}
    private function __wakeup() {}
}


?>