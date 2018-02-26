<!DOCTYPE html>
<html>
<title><?=$page->title?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= $config->urls->templates?>css/main.css" />
    <link rel="stylesheet" href="<?=$config->urls->templates?>css/responsive.css">
<body>
    <div class="container">
        <?php include('./inc/header.php'); ?>
    
        <h2 class="content_name"><?=$page->title; ?></h2>

        <div class="training-wrapper">
            <div>
                <img class="content_img training_img" src="<?=$page->training_img->url; ?>">
            </div>
            <div>
                <h4 class="training_name" style="margin-top:0;">ИНДИВИДУАЛЬНОЕ ОБУЧЕНИЕ</h4>
                <p style="text-align: justify;"><?=$page->training_text; ?></p>
                <input class="button" type="button" value="PIETEIKTIES" style="margin: 0 0 0 auto;">
            </div>
        </div>

        <img class="custom_hr" src="<?=$pages->get('/')->customhr->url; ?>">

        <?php
            foreach ($page->children() as $trainingItem) {
                echo $trainingItem->render();
            }
        ?>
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