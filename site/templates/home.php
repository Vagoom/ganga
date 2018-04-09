<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?=$page->title?></title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?= $config->urls->templates?>css/main.css" />
		<link rel="stylesheet" href="<?=$config->urls->templates?>css/responsive.css">
        <!-- Specific home page styles, overrides main.css-->
        <link rel="stylesheet" href="<?=$config->urls->templates?>css/home.css">
    </head>

	<body id="body_with_background">
		<div class="container">
            <?php include('./inc/header.php'); ?>
		    <img id="center-logo" src="<?=$page->centerlogo->url?>">
    	</div>
	<script src="<?=$config->urls->templates?>js/libs/jquery-3.3.1.min.js"></script>
	<script src="<?=$config->urls->templates?>js/main.js"></script>
	</body>
</html>
