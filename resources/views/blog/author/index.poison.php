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
                <a href="#"><li>Nouvel article</li></a>
                <a href="#"><li>Paramètres</li></a>
                <a href="#"><li>Déconnexion</li></a>
            </ul>
        </div>
    </div>

    <div class="row">
        <h5>Liste des articles</h5>
    </div>

    <div class="row">

        <table class="u-full-width">
            <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Location</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Dave Gamache</td>
                <td>26</td>
                <td>Male</td>
                <td>San Francisco</td>
            </tr>
            <tr>
                <td>Dwayne Johnson</td>
                <td>42</td>
                <td>Male</td>
                <td>Hayward</td>
            </tr>
            </tbody>
        </table>

    </div>

</div>

@include('partials/offline_js')
</body>
</html>