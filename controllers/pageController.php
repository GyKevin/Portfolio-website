<?php
class PageController {
    public function home() {
        require './views/home/home.view.php';
    }
    public function portfolio() {
        require './views/portfolio/portfolio.view.php';
    }
    public function about() {
        require './views/about/about.view.php';
    }
    public function contact() {
        require './views/contact/contact.view.php';
    }
}