<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <title>Atelier</title>
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
            <a class="nav-link" href="{{ route("reparer") }}">
                <button type="button" class="btn btn-outline-primary">Reparations</button>
            </a>

    </ul><br>

    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="p-4 bg-white shadow rounded">


            <div class="d-grid gap-2 col-6 w-100">
                <a href="{{ route("liste_voiture") }}">
                    <button class="btn btn-success" type="button">La liste des voitures</button>
                </a>
            </div>
            <div class="d-grid gap-2 col-6 w-100">
                <a href="{{ route("liste_reparateur") }}">
                    <button class="btn btn-primary" type="button">Liste des réparateurs</button>
                </a>

            </div>
        </div>
    </div>


    <script src={{ asset("assets/js/bootstrap.min.js") }}></script>
</body>

</html>