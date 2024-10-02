<?php
class pageController {
    public function home() {
        require './views/home/home.view.php';
    }
    public function portfolio() {
        require './views/portfolio/portfolio.view.php';
    }
}