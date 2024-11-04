<link rel="stylesheet" href="../public/style/portfolio.css">
<?php require './views/layout/header.php' ?>
<!-- new code -->
<nav>
        <a href="/">Homepage</a>
        <a class="selected-page" href="/portfolio">Portfolio</a>
        <a href="/about">About Me</a>
        <a href="/contact">Contact</a>
    </nav>
    <button id="lightModeSwitch">
        <i class="fa fa-sun-o icon-light"></i>
        <i class="fa fa-moon-o icon-dark"></i>
    </button>
</header>
<main>
    <div id="Project-page-cont">
    <h1 class="shiny-text">My projects</h1>
    <div class="project-cont">
        <!-- for each item that is in the table, make a prject box -->
        <?php foreach($items as $item): ?>
        <div class="projects">
            <div class="project-img-cont">
                <!-- <img src="../public/img/snake-game.png" alt=""> -->
                <img src="<?php echo $item['Image'] ?>" alt="">
            </div>
            <div class="project-txt-cont">
                <h2 class="shiny-text"><?php echo $item['Title'] ?></h2>
                <p class="project-paragraph-txt"><?php echo $item['Txt'] ?></p>
                <a href="/project?github=<?php echo $item['Github']; ?>">Read more >></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    </div>

    <!-- footer -->
     <script src="../public/concatenate.js"></script>
<?php require './views/layout/footer.php' ?>