<link rel="stylesheet" href="../public/style/homepage.css">
<?php require './views/layout/header.php' ?>
<!-- new code -->
<nav>
                <a class="selected-page" href="/">Homepage</a>
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
<div id="txt-container">
    <h1>Kevin Gyori</h1>
    <p id="small-txt">Software developer</p>
    <p>Hi! I'm Kevin. I am a software developer student that studies Windesheim. <br>
        I specialize in fullstack web development, mainly using HTML, CSS, Javascript and PHP.</p>
</div>
<!-- footer -->
<?php require './views/layout/footer.php' ?>