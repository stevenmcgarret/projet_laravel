<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">

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
    </ul><br>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="button">Ajouter un réparateur !</button>
    </div>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="w-50 p-5 bg-white rounded-4 border" style="box-shadow: 0 8px 30px rgba(0,0,0,0.15);">

            <form action="{{ route("soumettre") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp"
                        placeholder="Nom du réparateur">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom du réparateur">
                </div>
                <div class="mb-3">
                    <label for="specialite" class="form-label">Spécialité</label>
                    <input type="text" class="form-control" id="specialite" name="specialite" placeholder="Spécialité du réparateur">
                </div>

                <a href="{{ route("soumettre") }}">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </a>

            </form>
        </div>
    </div>
    <script src={{ asset("assets/js/bootstrap.min.js") }}></script>
</body>

</html>