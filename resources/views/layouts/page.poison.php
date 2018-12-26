<!doctype html>
<head>
    <title><?= $title ?></title>
    @include('partials.assets_css')
    <link rel="stylesheet" href="assets/css/page.css">
    @if($id == 'blog-header')
    <link rel="stylesheet" href="assets/css/blog.css">
    @endif
</head>
<body style="width: 100%">

<header class="desktop row page" id="{{ $id }}" style="height: 30rem;">

    <div id="navbar">

        <div class="right-side one column"><a href="#"><img src="public/assets/img/logo.png" alt="logo" id="logo"></a></div>

        <div class="left-side eleven columns">

            <a href="#" id="menu-btn"><i class="fas fa-bars"></i></a>

            <nav class="row u-full-width" id="navigation">
                <ul class="u-full-width">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="@url('services')">Services</a></li>
                    <li><a href="@url('products')">Produits</a></li>
                    <li><a href="@url('blog')">Blog</a></li>
                    <li><a href="@url('contact')">Contact</a></li>
                    <li id="back-btn"><a href="#"><i class="fas fa-chevron-left"></i>Back</a></li>
                </ul>
            </nav>

        </div>

    </div>

    <div class="container main-carousel">

        <div class="simple-page">

            <h1 class="title">{{ $page_title }}</h1>

            <div class="socials row u-full-width">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#" id="last-social"><i class="fab fa-youtube"></i></a>
            </div>

        </div>

    </div>

    <div class="shadow" style="min-height: 0; max-height: 30rem; height: 30rem;"></div>

</header>

<div class="content" id="container">
    {{ $content }}
</div>

@include('partials.footer')
@include('partials.assets_js')

</body>
</html>