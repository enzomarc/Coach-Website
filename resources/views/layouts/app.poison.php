<!doctype html>
<html lang="en">
<head>
    <title>{{ $title }}</title>
    @include('partials.assets_css')
</head>
<body style="width: 100%">

<header class="desktop row" id="header">

    <div id="navbar">

        <div class="right-side one column"><a href="#"><img src="assets/img/logo.png" alt="logo" id="logo"></a></div>

        <div class="left-side eleven columns">

            <a href="#" id="menu-btn"><i class="fas fa-bars"></i></a>

            <nav class="row u-full-width" id="navigation">
                <ul class="u-full-width">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="@url('services')">Services</a></li>
                    <li><a href="@url('products')">Produits</a></li>
                    <li><a href="https://medium.com/@heatherpicken">Blog</a></li>
                    <li><a href="@url('contact')">Contact</a></li>
                    <li id="back-btn"><a href="#"><i class="fas fa-chevron-left"></i>Back</a></li>
                </ul>
            </nav>

        </div>

    </div>

    <div class="container main-carousel">

        <div class="main-page">

            <h1 class="title">{{ $page_title }}</h1>
            <h5>{{ $subtitle }}</h5>

            <div class="email">
                <form action="@url('newsletter.add')" method="post" class="row">
                    <input class="five columns" type="email" name="email" id="email" placeholder="Votre adresse e-mail">
                    <button class="btn three columns" href="#" type="submit" id="submit">Obtenez le livre gratuit</button>
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

<div class="content" id="container">
    {{ $content }}
</div>

@include('partials.footer')
@include('partials.assets_js')

</body>
</html>