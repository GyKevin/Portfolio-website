<?php

Class ProjectModel {
    private $db;
    public function __construct() {
        $this->db = (new DbConnect())->connect();
    }

    // get the item from the table where the github link is the same as the project that is clicked on
    public function getProjects($github) {
        $stmt = $this->db->prepare("SELECT * FROM projects WHERE github = :github");
        $stmt->bindParam(':github', $github, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}