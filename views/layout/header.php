<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- dark/light mode switch -->
    <title>Homepage</title>
</head>
<body>
    <div id="container">
        <div id="mouse-tracker"></div>
        <header>
        <button class="hamburger-menu"><i class="fa fa-bars" aria-hidden="true"></i></button>
        <script>
            var dropdown = document.getElementsByClassName("hamburger-menu");
            dropdown.addEventListener("click", () => {
                document.querySelectorAll("nav").style.display = "flex";
            });
            
        </script>
            <!-- <nav>
                <a class="selected-page" href="/Portfolio-website/">Homepage</a>
                <a href="/Portfolio-website/portfolio">Portfolio</a>
                <a href="/about">Over Mij</a>
                <a href="/contact">Contact</a>
            </nav>
            <button id="lightModeSwitch">
                <i class="fa fa-sun-o icon-light"></i>
                <i class="fa fa-moon-o icon-dark"></i>
            </button>
        </header>
        <main> -->