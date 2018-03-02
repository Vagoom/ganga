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

            <?php

            $searchTerm = $input->get('search');
            $content = '';

            if ($searchTerm) {
                $searchTerm = $sanitizer->text($searchTerm);
                $foundPages = $pages->find("item_text|title|training_text~=$searchTerm");

                $content =  '<h2 class="content_name">"' . $searchTerm . '"</h2>';
                $content .= '<h2 class="content_name">Atrasti ' . count($foundPages) . ' rezultāti(s)</h2>';
                $content .= '<ul id="search-list">';
                foreach ($foundPages as $page) {
                    $a = '<a href="' . $page->rootParent()->url . '">' . $page->title . '</a>';
                    $content .= '<li>' . $a . '</li>';
                }
                $content .= '</ul>';
            } else {
                $content .= '<h2 class="content_name">Lūdzu aizpildiet meklēšanas lauku</h2>';
            }
            echo $content;
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