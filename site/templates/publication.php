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
        $counter = 1;
        foreach ($page->children() as $publication) {
            echo $publication->render();
            if (count($page->children()) > $counter) {
                echo '<img class="custom_hr" src="' . $customHrUrl . '">';
            }
            /** Avoid to render custom hr at the end of the list */
            $counter++;
        }
        ?>

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