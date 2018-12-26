<!doctype html>
<html lang="en">
<head>
    @include('partials.assets_css')
    <link rel="stylesheet" href="assets/css/author.css">
    <title>Blog - Nouvel article</title>
</head>
<body>

    <div class="author-dashboard container">

        <div class="row top-bar">
            <div class="six columns">
                <a class="action-btn" href="#" id="publish-btn">Publier</a>
            </div>

            <div class="six columns menu">
                <ul>
                    <a href="@url('author')"><li>Liste des articles</li></a>
                    <a href="#"><li>Paramètres</li></a>
                    <a href="#"><li>Déconnexion</li></a>
                </ul>
            </div>
        </div>

        <div class="row">
            <input class="u-full-width" type="text" name="title" id="title" placeholder="Titre de l'article">
        </div>
        
        <div class="row">
            <textarea class="u-full-width" name="description" id="description" cols="30" rows="10" placeholder="Description de l'article"></textarea>
        </div>
        
        <div class="row">
            <label for="image">Image de l'article</label>
            <input class="u-full-width" type="file" accept="image/*" name="image" id="image">
        </div>

        <div class="row">
            <form action="@url('post')" method="POST">
                <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>

    </div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="assets/js/textboxio.js"></script>

<script type="text/javascript">
    var editor = textboxio.replace('#editor');
</script>
</body>
</html>

