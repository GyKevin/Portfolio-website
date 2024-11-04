<?php
require_once './models/dbConnect.php';

class PortfolioModel {
    // make connection with database model
    private $db;
    public function __construct() {
        $this->db = (new DbConnect())->connect();
    }

    // get every item in the project table
    public function getPortfolio() {
        $stmt = $this->db->query("SELECT * FROM projects");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
