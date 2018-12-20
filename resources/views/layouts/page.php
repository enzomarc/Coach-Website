<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/skeleton.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/page.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body style="width: 100%">

@section('sidebar')

    <header class="desktop row" id="header">

        <div id="navbar">

            <div class="right-side one column"><a href="#"><img src="assets/img/logo.png" alt="logo" id="logo"></a></div>

            <div class="left-side eleven columns">

                <a href="#" id="menu-btn"><i class="fas fa-bars"></i></a>

                <nav class="row u-full-width" id="navigation">
                    <ul class="u-full-width">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Produits</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="<?= url('contact') ?>">Contact</a></li>
                        <li id="back-btn"><a href="#"><i class="fas fa-chevron-left"></i>Back</a></li>
                    </ul>
                </nav>
            </div>

        </div>

        <div class="container main-carousel">

            <div>

                <h1 class="title">@yield('page-title')</h1>
                <h5>@yield('subtitle')</h5>

                <div class="email">
                    <form action="#" method="post" class="row">
                        <input class="five columns" type="email" name="email" id="email" placeholder="Votre adresse e-mail">
                        <a class="btn three columns" href="#" type="submit" id="submit">Obtenez le livre gratuit</a>
                    </form>
                </div>

                <div class="socials row u-full-width">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#" id="last-social"><i class="fab fa-youtube"></i></a>
                </div>

            </div>

        </div>

        <div class="shadow"></div>

    </header>

@show

<div class="content" id="container">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/parallax.js"></script>
<script src="assets/js/app.js"></script>

</body>
</html>