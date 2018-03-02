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
        <h2 class="content_name"><?=$page->title ;?></h2>
        <div class="item-wrapper">
                <div>
                    <img class="content_img" src="<?=$page->item_img->url; ?>">
                </div>
                <div class="item_div">
                    <p><?=$page->item_text; ?></p>
                    <div>
                        <input class="button publication_button" type="button" value="ATPAKAĻ" onclick="goBack()">
                    </div>
                </div>
            </div>

        <?php include('./inc/footer.php');?>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <script src="<?=$config->urls->templates?>js/libs/jquery-3.3.1.min.js"></script>
    <script src="<?=$config->urls->templates?>js/main.js"></script>
</body>
</html>