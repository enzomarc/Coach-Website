<!doctype html>
<html lang="en">
<head>
    @include('partials.assets_css')
    <link rel="stylesheet" href="/assets/css/author.css">
    <title>Blog - Tableau de bord</title>
</head>
<body>

<div class="author-dashboard container">

    <div class="row top-bar">
        <div class="six columns">
            <span class="author-name">Tableau de bord de {{ $author->first_name }} {{ $author->last_name }}</span>
        </div>

        <div class="six columns menu">
            <ul>
                <a href="@url('posts.create')"><li>Nouvel article</li></a>
                <a href="@url('author.logout')"><li>Déconnexion</li></a>
            </ul>
        </div>
    </div>

    <div class="row">
        @if(App\Flash::exists())
            <div class="message">
                <p>{{ \App\Flash::message() }}</p>
            </div>
        @endif
    </div>

    <div class="row">
        <h5>Vos articles</h5>
    </div>

    <div class="row">

        <table class="u-full-width">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Statut</th>
                    <th>Dernière modification</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @if(count($posts) > 0)

                    @foreach($posts as $post)

                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>
                                @if($post->description == null)
                                    {{ "Pas de description" }}
                                @else
                                    {{ substr($post->description, 0, 15) }} {{ "..." }}
                                @endif
                            </td>
                            <td>
                                @if($post->public == 0)
                                    <div class="status red">Non publié</div>
                                @elseif($post->public == 1)
                                    <div class="status green">Publié</div>
                                @endif
                            </td>
                            <td>
                                @if($post->updated_at == null)
                                    {{ $post->created_at }}
                                @else
                                    {{ $post->updated_at }}
                                @endif
                            </td>
                            <td>
                                <a class="action-btn" href="@url('blog.show', ['post' => $post->id])">Voir</a>
                                @if($post->public == 0)
                                    <a class="action-btn" href="@url('posts.publish', ['post' => $post->id])">Publier</a>
                                @elseif($post->public == 1)
                                    <a class="action-btn" href="@url('posts.publish', ['post' => $post->id])">Retirer</a>
                                @endif
                                <a class="action-btn" href="@url('posts.edit', ['post' => $post->id])">Modifier</a>
                                <a class="action-btn delete" href="@url('posts.destroy', ['post' => $post->id])">Supprimer</a>
                            </td>
                        </tr>

                    @endforeach

                @else
                    {{ "Aucun article à afficher" }}
                @endif

            </tbody>
        </table>

    </div>

</div>

@include('partials/assets_js')
</body>
</html>