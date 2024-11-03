<link rel="stylesheet" href="../public/style/about.css">
<?php require './views/layout/header.php' ?>
<!-- Dit gedeelte komt op elke pagina voor zodat ik de class op de pages kan wisselen -->
<nav>
        <a href="/">Homepage</a>
        <a href="/portfolio">Portfolio</a>
        <a class="selected-page" href="/about">Over Mij</a>
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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laboriosam assumenda incidunt quae id, dignissimos perferendis eum earum ipsam. Nisi recusandae doloribus tenetur iusto! Minus cum laudantium atque repellat labore!</p>
    </div>
    <div class="bio-pic-cont">
        <img src="../public/img/me.jpeg" alt="">
    </div>
</div>
<?php require './views/layout/footer.php' ?>