<!doctype html>
<html lang="en">
<head>
    @include('partials.offline_css')
    <link rel="stylesheet" href="assets/css/author.css">
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
                <a href="@url('author.write')"><li>Nouvel article</li></a>
                <a href="#"><li>Paramètres</li></a>
                <a href="#"><li>Déconnexion</li></a>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="message">
            <p>{{ \App\Flash::message() }}</p>
        </div>
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

                @foreach($posts as $post)

                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                            @if($post->description == null)
                                {{ "Pas de description" }}
                            @else
                                {{ $post->description }}
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
                            <a class="action-btn" href="#">Voir</a>
                            <a class="action-btn" href="#">Publier</a>
                            <a class="action-btn" href="#">Modifier</a>
                            <a class="action-btn delete" href="#">Supprimer</a>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>

    </div>

</div>

@include('partials/offline_js')
</body>
</html>