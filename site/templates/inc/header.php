<header>
    <div id="nav_toggler">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
    </div>
    <div id="search_container">
        <form action="<?=$pages->get('/results')->url; ?>" method="get">
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
        <li><a href="<?=$pages->get('/contact/')->url; ?>"><?=$pages->get('/contact/')->title; ?></a></li>
        <li><a href="<?=$pages->get('/consultation/')->url; ?>"><?=$pages->get('/consultation/')->title; ?></a></li>
        <li><a href="<?=$pages->get('/training/')->url; ?>"><?=$pages->get('/training/')->title; ?></a></li>
        <li><a href="<?=$pages->get('/publication/')->url; ?>"><?=$pages->get('/publication/')->title; ?></a></li>
        <li><a href="<?=$pages->get('/about/')->url; ?>"><?=$pages->get('/about/')->title; ?></a></li>
        <li><a href="<?=$pages->get('/contact/')->youtube_channel?>" target="_blank">YOUTUBE</a></li>
    </ul>
    
    <!-- Toggles on mobile view -->
    <div id="mobile_navbar_container" style="display:none;">
        <ul id="navbar_mobile">
            <li><a href="<?=$pages->get('/contact/')->url; ?>"><?=$pages->get('/contact/')->title; ?></a></li>
            <li><a href="<?=$pages->get('/consultation/')->url; ?>"><?=$pages->get('/consultation/')->title; ?></a></li>
            <li><a href="<?=$pages->get('/training/')->url; ?>"><?=$pages->get('/training/')->title; ?></a></li>
            <li><a href="<?=$pages->get('/publication/')->url; ?>"><?=$pages->get('/publication/')->title; ?></a></li>
            <li><a href="<?=$pages->get('/about/')->url; ?>"><?=$pages->get('/about/')->title; ?></a></li>
            <li><a href="<?=$pages->get('/contact/')->youtube_channel?>" target="_blank">YOUTUBE</a></li>
            <li>
                <div id="mobile_search_container">
                    <form action="<?=$pages->get('/results')->url; ?>" method="get">
                        <input type="search" name="search">
                        <input id="mobile_search_button" type="image" src="<?= $config->urls->templates?>img/search-icon.png">
                    </form>
                </div>
            </li>
        </ul>
    </div>
</header>