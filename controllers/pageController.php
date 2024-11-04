<?php
require_once './models/portfolioModel.php';
require_once './models/projectModel.php';

class PageController {
    public function home() {
        require './views/home/home.view.php';
    }
    public function portfolio() {
        $portfolioModel = new PortfolioModel();
        $items = $portfolioModel->getPortfolio();
        require './views/portfolio/portfolio.view.php';
    }
    public function about() {
        require './views/about/about.view.php';
    }
    public function contact() {
        require './views/contact/contact.view.php';
    }
    public function project() {
        $github = $_GET['github'];
        $projectModel = new ProjectModel();
        $project = $projectModel->getProjects($github);
        require './views/project/project.view.php';
    }
}
