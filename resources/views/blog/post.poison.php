<!doctype html>
<html lang="en">
<head>
    @include('partials.assets_css')
    <title>{{ $post->title }}</title>
</head>
<body>

    <header class="desktop row page" id="post-header" style="height: 35rem; background-image: url('/uploads/posts_bg/{{ $post->image }}')">

        <?php $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>

        <div id="navbar">

            <div class="right-side one column"><a href="#"><img src="public/assets/img/logo.png" alt="logo" id="logo"></a></div>

            <div class="left-side eleven columns">

                <a href="#" id="menu-btn"><i class="fas fa-bars"></i></a>

                <nav class="row u-full-width" id="navigation">
                    <ul class="u-full-width">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="@url('services')">Services</a></li>
                        <li><a href="@url('products')">Produits</a></li>
                        <li><a href="@url('blog.index')">Blog</a></li>
                        <li><a href="@url('contact')">Contact</a></li>
                        <li id="back-btn"><a href="#"><i class="fas fa-chevron-left"></i>Back</a></li>
                    </ul>
                </nav>

            </div>

        </div>

        <div class="container main-carousel">

            <div class="simple-page">

                <div class="row u-full-width">
                    <h1 class="title" style="font-size: 2em; margin-bottom: 3rem;">{{ $post->title }}</h1>
                </div>

                <div class="informations row u-full-width">
                    <p style="font-size: 1.7rem; font-weight: 600;">Par {{ $author->first_name }} {{ $author->last_name }} le {{ date('Y/m/d', strtotime($post->created_at)) }}</p>
                </div>

                <div class="socials row u-full-width">
                    <a href="https://www.facebook.com/sharer.php?u={{ $url }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $post->title }}&hashtags="><i class="fab fa-twitter"></i></a>
                </div>

            </div>

        </div>

        <div class="shadow" style="min-height: 35rem; height: auto;"></div>

    </header>

    @if($post->public == 1)

        <div class="container" style="margin-top: 7%; margin-bottom: 7%;">
            {{ htmlspecialchars_decode($post->content) }}
        </div>

    @else

        <div class="container" style="margin-top: 7%; margin-bottom: 7%; text-align: center;">
            <h4>Le contenu de cet article ne peut être affiché car l'auteur ne l'a pas publié. Revenez plus tard !</h4>
        </div>

    @endif

@include('partials.footer')
@include('partials.assets_js')
</body>
</html>