<link rel="stylesheet" href="../public/style/about.css">
<?php require './views/layout/header.php' ?>
<!-- Dit gedeelte komt op elke pagina voor zodat ik de class op de pages kan wisselen -->
<nav>
        <a href="/">Homepage</a>
        <a href="/portfolio">Portfolio</a>
        <a class="selected-page" href="/about">About Me</a>
        <a href="/contact">Contact</a>
    </nav>
    <button id="lightModeSwitch">
        <i class="fa fa-sun-o icon-light"></i>
        <i class="fa fa-moon-o icon-dark"></i>
    </button>
</header>
<main>
<!-- begin pagina origineel code -->
<div id="bio-cont">
    <div class="bio-txt-cont">
        <h1 class="shiny-text">About me</h1>
        <p>Hi! I'm Kevin. I'm a software developer student that studies at Windesheim. 
            I started programming in 2020 after i started doing software development at ROC van Flevoland.
            In the years of my programming journey i have participated in many projects, mainly focusing on the backend using PHP,
            however i have developed a liking towards frontend developing during my internship at Jaspers Media, where i've been mostly
            developing their website using NUXT.js and TailwindCSS. <br> <br> Eversince my internship i like to experiment with making minimalistic,
            easy on the eyes websites that function well and still somehow catch your attention.
            Ofcourse, frontend development isn't the only thing i'm busy with as i still do a lot of backend work for my school projects and 
            i enjoy making projects in PHP to this day.</p>
            <a href="../public/Kevin_Gyori_CV.pdf" download>Download my CV</a>
    </div>
    <div class="bio-pic-cont">
        <img src="../public/img/me.jpeg" alt="">
    </div>
</div>
<?php require './views/layout/footer.php' ?>