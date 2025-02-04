<link rel="stylesheet" href="../public/style/contact.css">
<?php require './views/layout/header.php' ?>
<!-- Dit gedeelte komt op elke pagina voor zodat ik de class op de pages kan wisselen -->
<nav>
        <a href="/">Homepage</a>
        <a href="/portfolio">Portfolio</a>
        <a href="/about">About Me</a>
        <a class="selected-page" href="/contact">Contact</a>
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
        <h1 class="shiny-text">Email Me</h1>
        <!-- form om de gegevens in de input velden te versturen. -->
        <form id="contact-form" action="/contact" method="POST">
            <div class="txt-field-cont">
                <input class="email-field" type="text" placeholder="Email" name="email" id="email">
                <input class="subject-field" type="text" placeholder="Subject" name="subject" id="subject">
                <textarea class="txt-field" type="textarea" placeholder="Message" name="message" id="message"></textarea>
            </div>
            <div class="buttons-cont">
                <input class="submit-button" type="submit" value="Send">
                <a class="social-links" href="mailto:kevingyori@outlook.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                <a class="social-links" href="https://nl.linkedin.com/in/kevin-gy%C5%91ri-54685122b?"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
        </form>
    </div>
 </div>
<?php require './views/layout/footer.php' ?>