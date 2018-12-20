<html>
<head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/skeleton.css">
    <link rel="stylesheet" href="public/assets/css/styles.css">
    <link rel="stylesheet" href="public/assets/css/page.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body style="width: 100%">

<header class="desktop row" id="page-header">

    <div id="navbar">

        <div class="right-side one column"><a href="#"><img src="public/assets/img/logo.png" alt="logo" id="logo"></a></div>

        <div class="left-side eleven columns">

            <a href="#" id="menu-btn"><i class="fas fa-bars"></i></a>

            <nav class="row u-full-width" id="navigation">
                <ul class="u-full-width">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="<?= $router->url('services') ?>">Services</a></li>
                    <li><a href="<?= $router->url('products') ?>">Produits</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="<?= $router->url('contact') ?>">Contact</a></li>
                    <li id="back-btn"><a href="#"><i class="fas fa-chevron-left"></i>Back</a></li>
                </ul>
            </nav>

        </div>

    </div>

    <div class="container main-carousel">

        <div class="simple-page">

            <h1 class="title"><?= $page_title ?></h1>

            <div class="socials row u-full-width">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#" id="last-social"><i class="fab fa-youtube"></i></a>
            </div>

        </div>

    </div>

    <div class="shadow" style="min-height: 0; max-height: 40%; height: 40%;"></div>

</header>

<div class="content" id="container">
    <?= html_entity_decode($content) ?>
</div>

<footer>

    <div class="row container">
        <div class="four columns">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="<?= $router->url('services') ?>">Services</a></li>
                <li><a href="<?= $router->url('products') ?>">Produits</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="<?= $router->url('contact') ?>">Contact</a></li>
            </ul>
        </div>

        <div class="four columns">
            <h5>CONTACTEZ NOUS</h5>
            <p>Des questions ? Faites le nous savoir au 8th floor, 379 Hudson St, New York, NY 10018 ou appellez au (+1) 96 716 6879</p>

            <div class="socials row u-full-width">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#" id="last-social"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="four columns">
            <h5>NEWSLETTER</h5>
            <form action="" method="POST">
                <input type="email" name="email" id="email" placeholder="email@example.com">
                <button class="btn" type="submit">S'INSCRIRE</button>
            </form>
        </div>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
<script src="public/assets/js/parallax.js"></script>
<script src="public/assets/js/app.js"></script>

</body>
</html>