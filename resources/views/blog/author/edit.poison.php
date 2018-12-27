<!doctype html>
<html lang="en">
<head>
    @include('partials.assets_css')
    <link rel="stylesheet" href="/assets/css/author.css">
    <title>Blog - Modifier un article</title>
</head>
<body>

    <div class="author-dashboard container">

        <div class="row top-bar">
            <div class="six columns">
                <span>Modification par {{ $author->first_name }} {{ $author->last_name }}</span>
            </div>

            @include('partials.dashboard_header')
        </div>

        <form action="@url('posts.update', ['post' => $post->id])" method="POST" enctype="multipart/form-data">

            <div class="row">
                <input value="{{ $post->title }}" class="u-full-width" type="text" name="title" id="title" placeholder="Titre de l'article">
            </div>

            <div class="row">
                <textarea class="u-full-width" name="description" id="description" cols="30" rows="10" placeholder="Description de l'article">{{ $post->description }}</textarea>
            </div>

            <div class="row">
                <label for="image">Image de l'article</label>
                <input value="{{ $post->imagePath }}" class="u-full-width" type="file" accept="image/*" name="image" id="image">
            </div>

            <div class="row">
                <textarea name="content" id="editor">{{ $post->content }}</textarea>
            </div>

            <div class="row">
                <button class="post-btn" type="submit">Enregistrer</button>
            </div>

        </form>

    </div>

@include('partials.assets_js')
<script src="/assets/js/textboxio.js"></script>

<script type="text/javascript">
    var config = {
        images : {
            upload : {
                url : '/upload_image.php',
                basePath: '/',
                credentials: false
            }
        }
    };
    var editor = textboxio.replace('#editor', config);
</script>
</body>
</html>

