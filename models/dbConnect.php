<?php
class DbConnect {
    private $host = "localhost";
    private $db_name = "portfolio";
    private $username = "root";
    private $password = "";
    private $pdo;

    // connect to database with pdo
    public function connect() {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "connection failed: " . $e->getMessage();
        }
    return $this->pdo;
    }
}