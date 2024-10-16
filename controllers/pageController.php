<?php
class PageController {
    public function home() {
        require './views/home/home.view.php';
    }
    public function portfolio() {
        require './views/portfolio/portfolio.view.php';
    }
}