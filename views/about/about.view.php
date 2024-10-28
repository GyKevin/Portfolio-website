<link rel="stylesheet" href="../public/style/about.css">
<?php require './views/layout/header.php' ?>
<!-- Dit gedeelte komt op elke pagina voor zodat ik de class op de pages kan wisselen -->
<nav>
        <a href="/Portfolio-website/">Homepage</a>
        <a href="/Portfolio-website/portfolio">Portfolio</a>
        <a class="selected-page" href="/Portfolio-website/about">Over Mij</a>
        <a href="/Portfolio-website/contact">Contact</a>
    </nav>
    <button id="lightModeSwitch">
        <i class="fa fa-sun-o icon-light"></i>
        <i class="fa fa-moon-o icon-dark"></i>
    </button>
</header>
<main>
<!-- begin pagina origineel code -->
 <div id="about-cont">
    <!-- linker kant, github geinspireerd profiel box -->
    <div class="profile-cont">
        <div class="mini-bio">
            <img class="profile-pic" src="https://avatars.githubusercontent.com/u/61733321?v=4" alt="">
            <h1>Kevin</h1>
            <h3>GyKevin</h3>
            <p>Hi! I'm Kevin. I'm a 22 year old student at Windesheim studying software development. Welcome to my portfolio!</p>
        </div>
        <div class="achievements">
            <h4>Achievements</h4>
            <div class="icons">
                <i class="fa fa-code" aria-hidden="true"><span class="tooltip">Programmer</span></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
            </div>
        </div>
        <div class="highlights">
            <h4>Highlights</h4>
            <a href="/Portfolio-website/portfolio"><i class="fa fa-star" aria-hidden="true"></i> Mijn Projecten</a>
        </div>
    </div>
    <!-- rechter kant, lange BIO -->
     <div class="bio-cont">
        <h1>Hoi! Ik ben Kevin</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non ex vitae ligula egestas finibus a vel diam. Mauris pretium velit id velit dictum porttitor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse dui lorem, finibus non lobortis nec, pharetra auctor ex. Proin at tellus mollis neque auctor pulvinar eu vitae nulla. Quisque sit amet malesuada nisl. Curabitur finibus vel dui a egestas. Proin et risus dapibus, placerat arcu et, sollicitudin velit.

Phasellus vel arcu massa. Vivamus euismod ipsum a mauris iaculis, ut blandit dui ornare. Maecenas id ultrices nisi. Proin finibus facilisis iaculis. Morbi non tellus sed mi fermentum bibendum. Nunc tincidunt orci id tristique placerat. Cras eu volutpat arcu, sed faucibus arcu. Aliquam ultrices mi nec enim semper, sed scelerisque diam imperdiet. Pellentesque maximus magna non nisi laoreet, eget egestas leo varius. Nulla ultricies lectus ut quam cursus dignissim. Suspendisse finibus congue ornare. Donec sed mauris gravida, congue ligula accumsan, lobortis ligula. Duis varius erat ac congue sagittis. Proin in libero at lorem hendrerit ullamcorper.

Donec sit amet dui cursus, rhoncus ipsum tristique, faucibus purus. Morbi sollicitudin, enim vitae ultrices dignissim, massa nisl pharetra mauris, et blandit eros metus nec tellus. Morbi interdum iaculis nibh vitae consectetur. Sed vel mi quis purus pharetra rutrum non eu lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer volutpat, elit rutrum commodo rhoncus, dui velit interdum ante, sit amet dapibus lectus risus sed quam. Etiam pharetra, magna vel egestas aliquet, velit ante sodales massa, at lacinia est nisl id nibh. Nullam tristique porta dolor, in congue metus pellentesque in. </p>
        <h2 id="programming">Programmeren</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur deserunt, incidunt sequi qui ipsam cumque eveniet dignissimos aut tempore maiores quod quisquam. Obcaecati dolor porro inventore quas animi, fugiat nisi?</p>
        <h2 id="hobby">Hobbie's</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita velit temporibus maxime, dolore itaque autem odio doloremque eum at dolores hic ipsum atque numquam vel impedit, nisi ea asperiores repudiandae.</p> 
        <h2>CV</h2>
        <a href="">CV Downloaden</a>
    </div>
 </div>
<?php require './views/layout/footer.php' ?>