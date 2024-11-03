<?php
require_once './models/PortfolioModel.php';

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
}
