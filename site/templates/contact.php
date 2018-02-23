<!DOCTYPE html>
<html>
<head>
    <title><?=$page->title?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= $config->urls->templates?>css/main.css" />
    <link rel="stylesheet" href="<?=$config->urls->templates?>css/responsive.css">
</head>
<body>
    <div class="container">
        <?php include('./inc/header.php'); ?>
        <h2 class="content_name">KONTAKTI</h2>
        <div id="contact-block">
            <div>
                <img  src="<?=$page->authorimg->url?>" width="150px">
                <p style="color:grey">SEKO</p>
                <ul id="subscribe_bar">
                    <li><a href="#"><img src="<?=$config->urls->templates?>img/fb.png"></a></li>
                    <li><a href="#"><img src="<?=$config->urls->templates?>img/tw.png"></a></li>
                    <li><a href="#"><img src="<?=$config->urls->templates?>img/yt.png"></a></li>
                </ul>
            </div>
            <div>
                <p><?=$page->contentdescription?></p>
            </div>
        </div>
        <img class="custom_hr" src="<?=$pages->get('/')->customhr->url?>">

        <?php include('./inc/contact-form.php');?>
        <?php include('./inc/footer.php');?>
    </div>

    <!-- Jquery CDN -->
    <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script src="<?=$config->urls->templates?>js/main.js"></script>
    <script src="<?=$config->urls->templates?>js/libs/jquery.validate.min.js"></script>
</body>
</html>