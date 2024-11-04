<link rel="stylesheet" href="../public/style/project.css">
<?php require './views/layout/header.php' ?>
<nav>
        <a href="/">Homepage</a>
        <a href="/portfolio">Portfolio</a>
        <a href="/about">About Me</a>
        <a href="/contact">Contact</a>
    </nav>
    <button id="lightModeSwitch">
        <i class="fa fa-sun-o icon-light"></i>
        <i class="fa fa-moon-o icon-dark"></i>
    </button>
</header>
<main>
    <div id="project-cont">
        <h1 class="shiny-text"><?php echo $project['Title'];?></h1>
        <div id="project-img">
            <img src="<?php echo $project['Image']; ?>" alt="">
        </div>
        <div id="project-txt">
            <p><?php echo $project['Txt']; ?></p>
            <a href="<?php echo $project['Github']; ?>">Github</a>
        </div>
    </div>
<?php require './views/layout/footer.php' ?>