<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/skeleton.css">
    <link rel="stylesheet" href="public/assets/css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>

<?php $__env->startSection('sidebar'); ?>

    <header class="desktop row" id="header">

        <div id="navbar">

            <div class="right-side one column"><a href="#"><img src="public/assets/img/logo.png" alt="logo" id="logo"></a></div>

            <div class="left-side eleven columns">

                <a href="#" id="menu-btn"><i class="fas fa-bars"></i></a>

                <nav class="row u-full-width" id="navigation">
                    <ul class="u-full-width">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Produits</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li id="back-btn"><a href="#"><i class="fas fa-chevron-left"></i>Back</a></li>
                    </ul>
                </nav>
            </div>

        </div>

        <div class="container main-carousel">

            <div>

                <h1 class="title"><?php echo $__env->yieldContent('page-title'); ?></h1>
                <h5><?php echo $__env->yieldContent('subtitle'); ?></h5>

                <div class="email">
                    <form action="#" method="post" class="row">
                        <input class="five columns" type="email" name="email" id="email" placeholder="Votre adresse e-mail">
                        <button class="three columns" type="submit" id="submit">Obtenez le livre gratuit</button>
                    </form>
                </div>

                <div class="socials row">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>

            </div>

        </div>

        <div class="shadow"></div>

    </header>

<?php echo $__env->yieldSection(); ?>

<div class="content">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<div class="footer">



</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="public/assets/js/jquery.headroom.js"></script>
<script src="public/assets/js/headroom.js"></script>
<script src="public/assets/js/parallax.js"></script>
<script src="public/assets/js/app.js"></script>

</body>
</html>