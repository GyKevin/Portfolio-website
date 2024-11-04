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
        //i cannot seem to get the contact form to work. here is the source i used for it https://www.inmotionhosting.com/support/website/using-the-php-mail-function-to-send-emails/
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $to = "kevingyori@outlook.com";
            $headers = "From: $email";

            if(!$email || empty($subject) || empty($message)) {
                echo "Please fill in all the fields.";
                return;
            }

            $sent = mail($to, $subject, $message, $headers);

            if($sent) {
                echo "Your message has been sent succesfully!";
            } else {
                echo "There was en error sending your message. Please try again later.";
            }
            

        } else {
        require './views/contact/contact.view.php';
        }
    }
    public function project() {
        $github = $_GET['github'];
        $projectModel = new ProjectModel();
        $project = $projectModel->getProjects($github);
        require './views/project/project.view.php';
    }
}
