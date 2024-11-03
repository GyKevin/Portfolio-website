<?php
require_once './models/dbConnect.php';

class PortfolioModel {
    private $db;
    public function connectToDB() {
        $this->db = (new DbConnect())->connect();
    }
    public function getPortfolio() {
        $stmt = $this->db->query("SELECT * from projects");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}