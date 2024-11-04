<?php

Class ProjectModel {
    private $db;
    public function __construct() {
        $this->db = (new DbConnect())->connect();
    }

    public function getProjects($github) {
        $stmt = $this->db->prepare("SELECT * FROM projects WHERE github = :github");
        $stmt->bindParam(':github', $github, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}