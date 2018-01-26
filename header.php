<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>gangesvara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <script>
        window.onload = function changeBodyImg() {
            if (location.pathname !== '/' && location.pathname !== '/ganga/') {
                document.body.removeAttribute('style');
            }
        }
        changeBodyImg();
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body style="background-image:url('img/background.png')">
    <div class="container">
        <div id="search_container">
            <input type="search" name="search">
            <span class="glyphicon glyphicon-search"></span>
        </div>
        <div class="row">
            <div class="col-md-2">
                <img src="img/logo.svg" width="150px">
            </div>
            <div class="col-md-10">
                <ul id="navbar">
                    <li><a href="contact.php">KONTAKTI</a></li>
                    <li><a href="consultation.php">KONSULTĀCIJAS</a></li>
                    <li><a href="training.php">APMĀCĪBAS</a></li>
                    <li><a href="publication.php">PUBLIKĀCIJAS</a></li>
                    <li><a href="about.php">PAR AUTORU</a></li>
                    <li><a href="#">YOUTUBE</a></li>
                </ul>
                <br>
            </div>
        </div>