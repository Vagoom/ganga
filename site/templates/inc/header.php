<header>
    <div id="nav_toggler">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
    </div>
    <div id="search_container">
        <form action="post">
            <input type="search" name="search">
            <input id="search_button" type="image" src="<?= $config->urls->templates?>img/search-icon.png">
        </form>
    </div>
    <ul id="navbar">
        <li>
            <a href="<?=$pages->get('/')->url?>">
                <img id="header-logo" src="<?=$pages->get('/')->headerlogo->url?>">
            </a>
        </li>
        <li><a href="<?=$pages->get('/contact/')->url?>">KONTAKTI</a></li>
        <li><a href="consultation.php">KONSULTĀCIJAS</a></li>
        <li><a href="training.php">APMĀCĪBAS</a></li>
        <li><a href="publication.php">PUBLIKĀCIJAS</a></li>
        <li><a href="about.php">PAR AUTORU</a></li>
        <li>
            <a href="#youtube">YOUTUBE</a>
        </li>
    </ul>
    
    <!-- Toggles on mobile view -->
    <div id="mobile_navbar_container" style="display:none;">
        <ul id="navbar_mobile">
            <li>
                <a href="<?=$pages->get('/contact/')->url?>">KONTAKTI</a>
            </li>
            <li>
                <a href="consultation.php">KONSULTĀCIJAS</a>
            </li>
            <li>
                <a href="training.php">APMĀCĪBAS</a>
            </li>
            <li>
                <a href="publication.php">PUBLIKĀCIJAS</a>
            </li>
            <li>
                <a href="about.php">PAR AUTORU</a>
            </li>
            <li>
                <a href="https://youtube.com">YOUTUBE</a>
            </li>
            <li>
                <div id="mobile_search_container">
                    <form action="post">
                        <input type="search" name="search">
                        <input id="mobile_search_button" type="image" src="<?= $config->urls->templates?>img/search-icon.png">
                    </form>
                </div>
            </li>
        </ul>
    </div>
</header>