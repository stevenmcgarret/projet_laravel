<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <title>Document</title>
</head>

<body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route("welcome") }}">
                <button type="button" class="btn btn-outline-warning">Accueil</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("accueil") }}">
                <button type="button" class="btn btn-primary">Ajouter une voiture</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("Reparateur") }}">
                <button type="button" class="btn btn-outline-info">Ajouter un réparateur</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
    </ul>
    <h1>Voici la liste des voitures :</h1><br><br>


    <table class="table table-striped table-hover">
        <thead>
            <td>Id</td>
            <td>Immatriculation</td>
            <td>Marque</td>
            <td>Modèle</td>
            <td>Couleur</td>
            <td>Année</td>
            <td>Kilomètrage</td>
            <td>Carrosserie</td>
            <td>Énergie</td>
            <td>Boîte</td>
            <td>Actions</td>
        </thead>
        
        <tbody>
            @foreach ($ateliers as $atelier)
                <tr>
                    <td>{{ $atelier->id }}</td>
                    <td>{{ $atelier->immatriculation }}</td>
                    <td>{{ $atelier->marque }}</td>
                    <td>{{ $atelier->modele }}</td>
                    <td>{{ $atelier->couleur }}</td>
                    <td>{{ $atelier->annee }}</td>
                    <td>{{ $atelier->kilometrage }}</td>
                    <td>{{ $atelier->carrosserie }}</td>
                    <td>{{ $atelier->energie }}</td>
                    <td>{{ $atelier->boite }}</td>
                    <td>

                        <a href="{{ route('supprimer_voiture', ['id' => $atelier->id])}}">
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </a>

                        <a href="{{ route("modifier_voiture", ['id' => $atelier->id]) }}">
                            <button type="button" class="btn btn-success">Modifier</button>
                        </a>

                    </td>
                <tr>

                </tr>
            @endforeach
        </tbody>
    </table>
    <script src={{ asset("assets/js/bootstrap.min.js") }}></script>

</body>

</html>