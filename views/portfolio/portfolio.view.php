<link rel="stylesheet" href="../public/style/portfolio.css">
<?php require './views/layout/header.php' ?>
<nav>
        <a href="/Portfolio-website/">Homepage</a>
        <a class="selected-page" href="/Portfolio-website/portfolio">Portfolio</a>
        <a href="/about">Over Mij</a>
        <a href="/contact">Contact</a>
    </nav>
    <button id="lightModeSwitch">
        <i class="fa fa-sun-o icon-light"></i>
        <i class="fa fa-moon-o icon-dark"></i>
    </button>
</header>
<main>
    <div id="Project-page-cont">
    <h1>My projects</h1>
    <div class="project-cont">
        <div class="projects">
            <div class="project-img-cont">
                <img src="../public/img/snake-game.png" alt="">
            </div>
            <div class="project-txt-cont">
                <h2 class="project-head-txt">Snake game</h2>
                <p class="project-paragraph-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta itaque doloribus dolore magni suscipit? Ad laboriosam animi optio ea nihil sit ullam harum atque quis ab vero quod, nobis sunt?</p>
                <a href="">Read more >></a>
            </div>
        </div>
        <div class="projects">2</div>
        <div class="projects">3</div>
        <div class="projects">4</div>
    </div>
    </div>

    <!-- footer -->
     <script src="../public/concatenate.js"></script>
<?php require './views/layout/footer.php' ?>