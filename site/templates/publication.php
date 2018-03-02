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
        <h2 class="content_name"><?=$page->heading ;?></h2>

        <?php
            $customHrUrl = $pages->get('/')->customhr->url;
            $childs = $page->children("limit=3");
            $childCounter = count($childs);

        foreach ($childs as $publication) {
            echo $publication->render('./render/publication-preview.php');
            if ($childCounter > 1) {
                echo '<img class="custom_hr" src="' . $customHrUrl . '">';
            }
            $childCounter--;
        }
            echo $childs->renderPager(['nextItemLabel' => 'Tālāk', 'previousItemLabel' => 'Atpakaļ']);
        ?>

        <?php include('./inc/footer.php');?>
    </div>

    <script src="<?=$config->urls->templates?>js/libs/jquery-3.3.1.min.js"></script>
    <script src="<?=$config->urls->templates?>js/main.js"></script>
    <script src="<?=$config->urls->templates?>js/libs/jquery.validate.min.js"></script>
</body>
</html>