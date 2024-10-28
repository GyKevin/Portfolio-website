<link rel="stylesheet" href="../public/style/contact.css">
<?php require './views/layout/header.php' ?>
<!-- Dit gedeelte komt op elke pagina voor zodat ik de class op de pages kan wisselen -->
<nav>
        <a href="/Portfolio-website/">Homepage</a>
        <a href="/Portfolio-website/portfolio">Portfolio</a>
        <a href="/Portfolio-website/about">Over Mij</a>
        <a class="selected-page" href="/Portfolio-website/contact">Contact</a>
    </nav>
    <button id="lightModeSwitch">
        <i class="fa fa-sun-o icon-light"></i>
        <i class="fa fa-moon-o icon-dark"></i>
    </button>
</header>
<main>
<!-- begin pagina origineel code -->
 <div id="contact-page-cont">
    <div id="contact-form-cont">
        <h1 class="shiny-text">Neem contact op!</h1>
        <div class="txt-field-cont">
            <input class="email-field" type="text" placeholder="Email" name="" id="">
            <textarea class="txt-field" type="textarea" placeholder="Bericht" name="" id=""> </textarea>
        </div>
        <div class="buttons-cont">
            <input class="submit-button" type="submit" value="Verzenden">
            <a class="social-links" href="mailto:kevingyori@outlook.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            <a class="social-links" href="https://nl.linkedin.com/in/kevin-gy%C5%91ri-54685122b?"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
    </div>
 </div>
<?php require './views/layout/footer.php' ?>