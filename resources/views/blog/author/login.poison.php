<!doctype html>
<html lang="en">
<head>
    @include('partials.assets_css')
    <link rel="stylesheet" href="assets/css/author.login.css">
    <title>Blog - Connexion</title>
</head>
<body>

<div class="author-login container">

    <h2>Connexion</h2>
    <h6>Connectez vous pour écrire un article</h6>

    <form action="@url('author.login')" method="POST">

        <div class="row">
            <label for="username">Nom d'utilisateur</label>
            <input class="u-full-width" type="text" name="username" id="username">
        </div>

        <div class="row">
            <label for="password">Mot de passe</label>
            <input class="u-full-width" type="password" name="password" id="password">
        </div>

        <div class="row">
            <button class="u-full-width" type="submit">Connexion</button>
        </div>

    </form>

    {? echo 'Random'; ?}

</div>

@include('partials/assets_js')
</body>
</html>